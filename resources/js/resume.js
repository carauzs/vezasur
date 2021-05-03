import dayjs from "dayjs";
import customParseFormat from 'dayjs/plugin/customParseFormat';
dayjs.extend(customParseFormat);

(function() {
    const reservation = JSON.parse(localStorage.getItem('reservation'));


    if (!reservation.tour_id) {
        window.location.replace('/');
    }

    const date = dayjs(reservation.date || '');
    const time = dayjs(reservation.time, 'HH:mm');

    document.getElementById('date').innerHTML = date.format('MM/DD/YYYY');
    document.getElementById('time').innerHTML = time.format('hh:mmA');
    document.getElementById('checkout').innerHTML = reservation.payment;

    const button = document.getElementById('submit');
    button.onclick = () => {
        button.disabled = true;
        localStorage.removeItem('reservation');

        window.axios.post('/order', reservation).then(response => {
            button.disabled = false;
            window.location.href = '/';
        });
    };
})();
