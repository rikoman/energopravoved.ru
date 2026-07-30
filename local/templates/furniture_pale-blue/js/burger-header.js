        document.addEventListener('DOMContentLoaded', function() {
            const burger = document.querySelector('.burger-btn');
            const navWrapper = document.querySelector('.header-nav-wrapper');

            if (burger && navWrapper) {
                burger.addEventListener('click', function(e) {
                    e.stopPropagation();
                    this.classList.toggle('active');
                    navWrapper.classList.toggle('open');
                });

                // Закрываем меню при клике вне его (опционально)
                document.addEventListener('click', function(e) {
                    if (!burger.contains(e.target) && !navWrapper.contains(e.target)) {
                        burger.classList.remove('active');
                        navWrapper.classList.remove('open');
                    }
                });
            }
        });
 