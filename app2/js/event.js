const myelement = document.getElementById('my-nav')

function isScrolled(){
    if(window.scrollY > 30){
        myelement.style.transition = "1.0s"
        myelement.classList.add('is-scroll')
    }
    else {
        myelement.style.transition = "1.0s"
        myelement.classList.remove('is-scroll')
    }
}


