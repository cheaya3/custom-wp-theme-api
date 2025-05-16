document.addEventListener("DOMContentLoaded", function () {
    const el = document.getElementById("recommended-magazines")
    if (!el) return
  
    const { createApp, ref, onMounted } = Vue
  
    createApp({
      setup() {
        const eventId = parseInt(el.dataset.eventId)
        const relatedMagazines = ref([])
  
        function formatDate(dateStr) {
          if (!dateStr) return ''
          const d = new Date(dateStr)
          return `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate()}`
        }
  
        onMounted(async () => {
          // イベントのタグを取得
          const eventRes = await axios.get(`/wp-json/wp/v2/event/${eventId}`)
          const event = eventRes.data
          const eventTagIds = event.tags || []
  
          if (eventTagIds.length === 0) return
  
          // 電子コンテンツ全取得（最大100件）
          const magRes = await axios.get(`/wp-json/wp/v2/e-contents?acf_format=standard&per_page=100`)
          const allMagazines = magRes.data
  
          // タグ一致するものだけ抽出（最大3件）
          const matched = allMagazines.filter(mag => {
            const magTagIds = mag.tags || []
            return magTagIds.some(id => eventTagIds.includes(id))
          }).slice(0, 3)
  
          relatedMagazines.value = matched
        })
  
        return { relatedMagazines, formatDate }
      },
      template: `
        <section class="recommended-magazines e-contents" style="margin-top: 3rem;">
          <div class="container">
            <h3>おすすめ電子書籍</h3>
            <div class="wrapper" v-if="relatedMagazines.length">
              <div class="card" v-for="mag in relatedMagazines" :key="mag.id">
                <a :href="'/e-contents/' + mag.slug">
                  <div class="thumb">
                    <img :src="mag.acf['menu-image']" alt="マガジン画像">
                  </div>
                  <div class="description">
                    <h4>{{ mag.title.rendered }}</h4>
                    <div class="information">
                      <dl>
                        <dt>タイプ:</dt>
                        <dd>{{ mag.acf['type'] }}</dd>
                      </dl>
                      <dl>
                        <dt>発刊開始:</dt>
                        <dd>{{ formatDate(mag.acf['p-date']) }}</dd>
                      </dl>
                      <dl>
                        <dt>読者数:</dt>
                        <dd>{{ mag.acf['readership'] }}人</dd>
                      </dl>
                    </div>
                    <p>{{ mag.acf['overview'] }}</p>
                  </div>
                </a>
              </div>
            </div>
            
            <p v-else>おすすめ電子マガジンは見つかりませんでした。</p>
          </div>
        </section>
      `
    }).mount("#recommended-magazines")
  })
  