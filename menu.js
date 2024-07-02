let btnMenu = document.getElementById('btn-menu-abrir')
let menu = document.getElementById('menu-mobile-fechar')
let overlay = document.getElementById('overlay-menu-fechar')

btnMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})

overlay.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})