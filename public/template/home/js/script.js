const body = document.querySelector('body');
const deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
const header = document.querySelector('header');

// Add zero to before number
function pad(num, size) {
    num = num.toString();
    while (num.length < size) num = "0" + num;
    return num;
}



// Handle scroll nav
const navMainScroll = document.querySelector(".nav-main");
if (navMainScroll) {
    const header = document.querySelector('header');
    const hNavMain = navMainScroll?.offsetHeight;
    const spaceTop = navMainScroll?.offsetTop;
    window.addEventListener('scroll', function () {
        let scrollPos = window.scrollY;
        if (scrollPos >= (spaceTop + hNavMain)) {
            navMainScroll.classList.add('scroll');
            header.style.marginBottom = hNavMain + 'px';
        } else {
            navMainScroll.classList.remove('scroll');
            header.style.marginBottom = '0';
        }
    });
}

function toggleOverflowBody() {
    body.classList.toggle('overflow-hidden');
}

// Handle click show element
function toggleClassElement(target, $class = 'show', toggleBody = true) {
    let arrTarget = target.split(',');
    arrTarget.forEach(function ($ele, $i) {
        let eleTarget = document.getElementById($ele);
        eleTarget.classList.toggle($class);
    });
    if (toggleBody) {
        toggleOverflowBody();
    }
}
function stopPropagationClick(e) {
    e.stopPropagation();
}
// Function to check if an element is in viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.top <= window.innerHeight - rect.height / 2
    );
}

// Function to handle scroll event
function handleScroll() {
    const box = document.getElementById('animated-box');
    if (isInViewport(box)) {
        box.classList.add('animated'); // Add animated class when in viewport
        document.removeEventListener('scroll', handleScroll); // Remove scroll listener after animation runs
    }
}

// Add scroll event listener
document.addEventListener('scroll', handleScroll);


//introduce
// Lấy phần tử con và phần tử cha từ DOM
const parent = document.getElementById('relativeParent');
const child = document.getElementById('absoluteChild');

// Lấy chiều cao của phần tử con sau khi nó đã render
const childHeight = child.offsetHeight;

// Đặt chiều cao của phần tử cha bằng chiều cao của phần tử con
parent.style.height = `${childHeight}px`;
