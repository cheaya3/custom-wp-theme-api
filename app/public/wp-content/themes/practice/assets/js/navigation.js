if (window.matchMedia('(max-width: 767px)').matches) {
    //ハンバーガー用のアイコンを出力する
    var nav_menu = document.getElementById('global');
    nav_menu.insertAdjacentHTML('afterbegin','<div id="g-menu"><span></span></div>');

    //ボタンをクリックしたときにclassを追加する
    document.getElementById("g-menu").onclick = function() {
        const nav = document.getElementById('global');
        nav.classList.toggle('active');

    };
}