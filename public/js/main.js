const toogler = document.querySelector('.toggler');
const icon = document.querySelector('.toggler-icon');
const sidebar = document.querySelector('#sidebar');

let toggled = false;

const click = () => {
    sidebar.classList.toggle('active');

    if (toggled) {
        icon.classList.toggle('fa-angle-left');
        toggled = true;
    } else {
        icon.classList.toggle('fa-angle-right');
        toggled = false;
    }
}

toogler.onclick = click;