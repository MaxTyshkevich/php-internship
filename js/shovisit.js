document.addEventListener('DOMContentLoaded', () => {

    const currentPage = window.location.pathname.split('.')[0];
    const showAllVisits = document.querySelector('#showAllVisits');
    const showCurrentPageVisits = document.querySelector('#showCurrentPageVisits');

    const cookie = document.cookie.split(';').reduce((acc, item) => {
        let [key, value] = item.split('=');
        key = key.trim();
        value = value.trim();
        acc[key] = value;
        return acc;
    }, {});

    console.log(cookie);

    showAllVisits.innerHTML = cookie['totalDownloadSite'];
    showCurrentPageVisits.innerHTML = cookie[currentPage];
})