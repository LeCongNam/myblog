const heartIcons = document.querySelectorAll('.like__post')
const headerEle = document.querySelector('header')
const scrollTop = document.querySelector('.scroll__top')
const menuMobile = document.querySelector('.heder__right')
const btnMenu = document.querySelector('.fa-bars')
const btnClose = document.querySelector('.btn__close')
const overlay = document.querySelector('.overlay')



Array.from(heartIcons).forEach(heart => {
    heart.onclick = () => {
        heart.classList.toggle('liked')
    }
})




window.addEventListener('scroll', () => {
    let positionX = window.scrollY
    if (positionX >= 200) {
        headerEle.classList.add('sticky')
        scrollTop.classList.add('show')
    } else {
        headerEle.classList.remove('sticky')
        scrollTop.classList.remove('show')
    }
})

btnMenu.onclick = () => {
    console.log('adads');
    headerEle.classList.add('sticky')
    menuMobile.classList.toggle('show')
}

btnClose.onclick = () => {
    menuMobile.classList.toggle('show')
}

overlay.onclick = () => {
    menuMobile.classList.toggle('show')
}




Array.from(heartIcons).forEach(heart => {
    heart.onclick = () => {
        heart.classList.toggle('liked')
    }
})


window.addEventListener('scroll', () => {
    let positionX = window.scrollY
    if (positionX >= 200) {
        headerEle.classList.add('sticky')
        scrollTop.classList.add('show')
    } else {
        headerEle.classList.remove('sticky')
        scrollTop.classList.remove('show')
    }
})

scrollTop.onclick = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}