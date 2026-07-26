document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const header = item.querySelector('h3');
        if (header) {
            header.addEventListener('click', function(e) {
                e.stopPropagation();
                item.classList.toggle('active');
                // Иконка будет вращаться через CSS
            });
        }
    });
});