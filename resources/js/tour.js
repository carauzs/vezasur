// Swiper
import SwiperCore, { Navigation, Pagination } from 'swiper/core';
SwiperCore.use([Navigation, Pagination]);
import 'swiper/swiper-bundle.css';
// Datepicker
import { Datepicker } from 'vanillajs-datepicker';

new SwiperCore('.swiper-container', {
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    }
});

const datepicker = new Datepicker(document.getElementById('calendar'));

(function() {
    const button = document.getElementById('submit');
    button.onclick = () => {
        const date = datepicker.getDate();
        const time = document.querySelector('[name="time"]:checked').value;

        if (!date || !time) {
            return;
        }

        const reservation = {
            tour_id: window.tour_id,
            date,
            time
        };
        localStorage.setItem('reservation', JSON.stringify(reservation));

        window.location.href = `/contact/${window.tour_id}`;
    };
})();
