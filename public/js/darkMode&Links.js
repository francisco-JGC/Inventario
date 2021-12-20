// **HIDE MENU**
const menuToggler = document.querySelector('.toggle');
const nav = document.querySelector('.nav');

menuToggler.addEventListener('click', () => {
    menuToggler.classList.toggle('active');
    nav.classList.add('nav-minimised');
})
// **ACTIVE LINKS**
const links = document.querySelectorAll('.link');

const active_link = (links) => {
    links.forEach(link => {
        link.attributes.data.value === location.pathname ? link.classList.add('link-active') : link.classList.remove('link-active');
    })
}
// **NEW PRODUCT RENDER IMG**
const img = document.querySelector('#img');
const render_img = document.querySelector('#render-img');

const renderING = (e) => {
    if (e.target.files[0]) {
        const file = URL.createObjectURL(e.target.files[0]);
        render_img.setAttribute('src', file);
    }
}

img.addEventListener('change', renderING);


// **NEW PRODUCT INPUT STYLE**
const inputs = document.querySelectorAll('.data-box input,textarea');

const changeModeInputs = (e) => {
    e.target.value ? e.target.classList.add('input-active') : e.target.classList.remove('input-active');
}
inputs.forEach(input => {
    input.addEventListener('change', changeModeInputs);
});

// **DARK MODE**
const dark_mode = document.querySelector('#dark-mode');
const body = document.querySelector('#body');

dark_mode.addEventListener('click', (e) => {
    body.classList.toggle('dark-mode');
    store(e.target.checked);
})

const loadMode = () => {
    const mode = localStorage.getItem('dark-mode');
    if (!mode) {
        store('false');
        dark_mode.checked = false;

    } else if (mode === 'true') {
        body.classList.toggle('dark-mode');
        dark_mode.checked = true;
    }
}

const store = (value) => {
    localStorage.setItem('dark-mode', value);
}

window.onload = () => {
    active_link(links);
    loadMode();
}
