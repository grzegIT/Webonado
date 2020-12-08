window.addEventListener('load', () => {
    const hamburger_btn = document.getElementById('bth-ham');
    const menu_wrapper = document.getElementById('menu-wrap');
    const main_tag = document.getElementById('main_tag');
    hamburger_btn.addEventListener('click', () => {
        hamburger_btn.classList.toggle('open');
        menu_wrapper.classList.toggle('visible');
        main_tag.classList.toggle('shadowing');
    })

})