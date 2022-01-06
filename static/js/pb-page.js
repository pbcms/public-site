(function() {
    document.querySelectorAll('[toggle-darkmode]').forEach(el => el.addEventListener('click', toggleDarkmode));
    
    function toggleDarkmode() {
        document.querySelector('html').classList.toggle('darkmode');
        document.querySelectorAll('[toggle-darkmode]').forEach(item => {
            item.innerHTML = '<i data-feather="' + (document.querySelector('html').classList.contains('darkmode') ? 'sun' : 'moon') + '"></i>';
        });

        document.cookie = "darkmode=" + (document.querySelector('html').classList.contains('darkmode') ? '1' : '0') + "; expires=Tue, 19 Jan 2038 04:14:07 UTC; path=/";
        feather.replace();
    }
})();