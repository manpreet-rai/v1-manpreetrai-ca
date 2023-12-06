import './bootstrap';

anime({
    targets: '.role',
    opacity: [0, 1],
    scale: [0.8, 1],
    translateY: [80, 0],
    duration: 500,
    easing: 'easeInOutQuad'
});

let element = document.querySelector('#gallery');
element.addEventListener('wheel', (event) => {
    event.preventDefault();

    element.scrollBy({
        left: event.deltaY < 0 ? -100 : 100,
    });
});

document.addEventListener('DOMContentLoaded', (e) => {
    const link = document.querySelectorAll('nav > .hover-this');
    const cursor = document.querySelector('.cursor');

    const animateit = function (e) {
        const span = this.querySelector('span');
        const {offsetX: x, offsetY: y} = e,
            {offsetWidth: width, offsetHeight: height} = this,

            move = 25,
            xMove = x / width * (move * 2) - move,
            yMove = y / height * (move * 2) - move;

        span.style.transform = `translate(${xMove}px, ${yMove}px)`;

        if (e.type === 'mouseleave') span.style.transform = '';
    };

    const editCursor = e => {
        const {clientX: x, clientY: y} = e;
        cursor.style.left = x + 'px';
        cursor.style.top = y + 'px';
    };

    link.forEach(b => b.addEventListener('mousemove', animateit));
    link.forEach(b => b.addEventListener('mouseleave', animateit));
    window.addEventListener('mousemove', editCursor);

    setTimeout(() => {
        document.getElementById('status').style.display = 'none';
    }, 5000);
});
