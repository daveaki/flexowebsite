document.addEventListener('DOMContentLoaded', function () {

    const iconNav = document.getElementById('icon-nav');
    const navMenu = document.getElementById('box-nav-menu');

    if (iconNav && navMenu) {
        iconNav.addEventListener('click', function (e) {
            e.stopPropagation();
            navMenu.classList.toggle('open');
        });

        document.addEventListener('click', function (e) {
            if (!navMenu.contains(e.target)) {
                navMenu.classList.remove('open');
            }
        });
    }

    // Language switcher
    document.querySelectorAll('.lang-switcher').forEach(function (switcher) {
        var current = switcher.querySelector('.lang-current');
        if (current) {
            current.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                // Close other switchers
                document.querySelectorAll('.lang-switcher').forEach(function (s) {
                    if (s !== switcher) s.classList.remove('open');
                });
                switcher.classList.toggle('open');
            });
        }
    });
    document.addEventListener('click', function (e) {
        document.querySelectorAll('.lang-switcher').forEach(function (s) {
            if (!s.contains(e.target)) {
                s.classList.remove('open');
            }
        });
    });

    // Copy to clipboard
    document.querySelectorAll('.btn-copy').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const text = btn.getAttribute('data-copy');
            navigator.clipboard.writeText(text).then(function () {
                btn.classList.add('copied');
                setTimeout(function () {
                    btn.classList.remove('copied');
                }, 2000);
            });
        });
    });

    // Header scroll
    const header = document.querySelector('header');
    if (header) {
        var keepScrolled = document.body.classList.contains('keep-scrolled');
        if (keepScrolled) header.classList.add('scrolled');
        window.addEventListener('scroll', function () {
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else if (!keepScrolled) {
                header.classList.remove('scrolled');
            }
        });
    }

});
