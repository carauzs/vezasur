import dayjs from 'dayjs';
import customParseFormat from 'dayjs/plugin/customParseFormat';
dayjs.extend(customParseFormat);

const form = document.querySelector('form');

if (!localStorage.getItem('verified')) {
    document.getElementById('age').classList.remove('hidden');
}

form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (localStorage.getItem('verified')) {
        return;
    }
    var day = document.querySelector('[name="day_age"]').value.padStart(2, '0');
    var month = document.querySelector('[name="month_age"]').value.padStart(2, '0');
    var year = document.querySelector('[name="year_age"]').value;
    if (dayjs(`${day}-${month}-${year}`, "DD-MM-YYYY").isAfter(dayjs().subtract(21, 'years'))) {
        alert('YOU MUST BE 21+ TO ENTER AND FOLLOW');
        return;
    }
    document.getElementById('age').classList.add('hidden');
    localStorage.setItem('verified', true);
});
