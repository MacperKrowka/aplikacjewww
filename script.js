
window.addEventListener('DOMContentLoaded', () => {
    const dateTimeElement = document.getElementById('dateTime');

    function updateDateTime() {
        const currentDateTime = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
        const formattedDateTime = currentDateTime.toLocaleString('pl-PL', options);
        dateTimeElement.textContent = formattedDateTime;
    }


    setInterval(updateDateTime, 1000);


    updateDateTime();
});
