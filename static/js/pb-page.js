(function() {
    document.querySelectorAll('[toggle-darkmode]').forEach(el => el.addEventListener('click', e => {
        document.querySelector('html').classList.toggle('darkmode');
        document.querySelectorAll('[toggle-darkmode]').forEach(item => {
            item.innerHTML = '<i data-feather="' + (document.querySelector('html').classList.contains('darkmode') ? 'sun' : 'moon') + '"></i>';
        });

        feather.replace();
    }));
})();