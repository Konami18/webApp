function meow(){
    const elements = document.querySelectorAll('h1, h2, h3, h4, p, span, label');

    elements.forEach(element => {
        element.textContent = "Meow meow";
    });
}
function load(){
    document.getElementById('load').style.display='block';
}
function unload(){
    document.getElementById('load').style.display='none';
}

document.addEventListener('DOMContentLoaded', function () {
    const boxes = document.querySelectorAll('.TT');

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function onScroll() {
        let delay = 0;
        boxes.forEach((box, index) => {
            if (isElementInViewport(box)) {
                setTimeout(() => {
                    box.classList.add('visible');
                }, delay);
                delay += 300; // Điều chỉnh thời gian trễ giữa các box (tính bằng mili giây)
            }
        });
    }

    window.addEventListener('scroll', onScroll);
    // Gọi hàm onScroll ban đầu để kiểm tra khi tải trang
    onScroll();
});
