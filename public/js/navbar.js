document.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.getElementById('search-btn');
    const searchOverlay = document.getElementById('search-overlay');
    const closeSearch = document.getElementById('close-search');
    const menuBtn = document.getElementById('menu-btn');
    const menuIcon = document.getElementById('menu-icon');
    const mobileMenu = document.getElementById('mobile-menu');

    const iconOpen = menuBtn.dataset.iconOpen;
    const iconClose = menuBtn.dataset.iconClose;

    if (searchBtn && searchOverlay && closeSearch) {
        searchBtn.addEventListener('click', () => {
            searchOverlay.classList.remove('hidden');
            setTimeout(() => {
                searchOverlay.classList.add('opacity-100', 'translate-y-0');
                searchOverlay.classList.remove('opacity-0', 'translate-7-5');
                searchOverlay.querySelector('input').focus();
            }, 10);
        });

        closeSearch.addEventListener('click', () => {
            searchOverlay.classList.add('opacity-0', 'translate-y-5');
            searchOverlay.classList.remove('opacity-100', 'translate-y-0');
            setTimeout(() => {
                searchOverlay.classList.add('hidden');
            }, 300);
        });
    }

    let menuOpen = false;

    menuBtn.addEventListener('click', () => {
        menuOpen = !menuOpen;
        mobileMenu.classList.toggle('hidden');

        // Ganti ikon hamburger menu dan silang
        if (menuOpen) {
            menuIcon.src = iconOpen;
        } else {
            menuIcon.src = iconClose;
        }
    });
});
