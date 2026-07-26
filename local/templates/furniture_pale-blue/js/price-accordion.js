document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll(".acc-item");

    items.forEach(item => {
        item.querySelector(".acc-title").onclick = () => {
            item.classList.toggle("active");
        };
    });
});