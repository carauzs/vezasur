import dayjs from 'dayjs';
import customParseFormat from 'dayjs/plugin/customParseFormat';
dayjs.extend(customParseFormat);

(function() {
    const reservation = JSON.parse(localStorage.getItem('reservation'));

    if (!reservation.tour_id) {
        window.location.replace('/');
    }

    const date = dayjs(reservation.date || '');
    const time = dayjs(reservation.time, 'hh:mm');

    document.getElementById('date').innerHTML = date.format('MM/DD/YYYY');
    document.getElementById('time').innerHTML = time.format('hh:mmA');

    const button = document.getElementById('submit');
    button.onclick = () => {
        reservation.first_name = document.getElementById('first_name').value;
        reservation.last_name = document.getElementById('last_name').value;
        reservation.address = document.getElementById('address').value;
        reservation.payment = document.getElementById('payment').value;
        reservation.credit_card = document.getElementById('credit_card').value;
        reservation.billing_address = document.getElementById('billing_address').value;

        if (
            !reservation.first_name ||
            !reservation.last_name ||
            !reservation.address ||
            !reservation.payment ||
            !reservation.credit_card ||
            !reservation.billing_address
        ) {
            return;
        }

        localStorage.setItem('reservation', JSON.stringify(reservation));

        window.location.href = `/resume/${reservation.tour_id}`;
    };
})();
