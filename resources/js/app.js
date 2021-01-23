require('./bootstrap');

import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';

if(document.querySelector('.swiper-container')){
    const mySwiper = new Swiper('.swiper-container',{
        slidesPerView: 3
    })

    document.querySelector('#swiper-next').addEventListener('click', _ => mySwiper.slideNext())
    document.querySelector('#swiper-prev').addEventListener('click', _ => mySwiper.slidePrev())
}


// CONTACT ANIMATION
if(document.querySelector('#formContact')){

    const contactAnimationOpen = () => {
        document.querySelector('#main').classList.add('stop-scrolling')
        document.querySelector('#formContact').classList.remove('-ml-100vw')
    }

    const contactAnimationClose = () => {
        document.querySelector('#main').classList.remove('stop-scrolling')
        document.querySelector('#formContact').classList.add('-ml-100vw')
    }

    document.querySelector('#btnContact').addEventListener('click', _ => {
        contactAnimationOpen()
    })

    document.querySelector('#btnClose').addEventListener('click', _ => {
        contactAnimationClose()
    })
}


document.querySelector('.logo-to-home').addEventListener('click', e => {

    const url = e.target.viewportElement.dataset.srcdata
    window.location.assign(url)

})
