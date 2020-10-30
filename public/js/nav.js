const topbar = document.getElementById('topbar')
const toggleMenu=document.getElementById('toggle-menu')
const menu=document.getElementById('nav2')

if(topbar){
    topbar.addEventListener('click',(e)=>{
        if(e.target.parentElement.dataset.type!=undefined){
            menu.classList.toggle('main-nav__show')
            toggleMenu.classList.toggle('show')
        }
    } )
}

