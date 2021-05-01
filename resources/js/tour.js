import { createApp } from 'vue';
import { Swiper, SwiperSlide } from 'swiper/vue';

import 'swiper/swiper.min.css';

const app = createApp({
    components: {
        Swiper,
        SwiperSlide,
    },
    mounted() {
        console.log('ASDFASDF');
    },
    data() {
        return {
            images: [
                'https://via.placeholder.com/500',
                'https://via.placeholder.com/500',
                'https://via.placeholder.com/500',
                'https://via.placeholder.com/500',
                'https://via.placeholder.com/500',
            ]
        };
    }
});

const vm = app.mount('#app');
