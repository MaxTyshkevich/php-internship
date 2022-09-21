document.addEventListener('DOMContentLoaded', () => {
    const showAllVisits = document.querySelector('#showAllVisits');

    const cookie = document.cookie.split(';').reduce((acc, item) => {
        let [key, value] = item.split('=');
        acc[key] = value;
        return acc;
    }, {});

    showAllVisits.innerHTML = cookie['totalDownloadSite'];
    console.log(cookie);

})