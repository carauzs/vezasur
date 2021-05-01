import SwiperCore, { Navigation, Pagination } from 'swiper/core';
SwiperCore.use([Navigation, Pagination]);
import 'swiper/swiper-bundle.css';
const swiper = new SwiperCore('.swiper-container', {
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
});
