let open = document.getElementById("open")
let close = document.getElementById("close")
let modal = document.getElementById("modal")
let overlay = document.getElementById("overlay")

open.addEventListener('click', function(){
    overlay.classList.add('visible')
    modal.classList.add('visible')
})

close.addEventListener('click', function(){
    overlay.classList.remove('visible')
    modal.classList.remove('visible')
})