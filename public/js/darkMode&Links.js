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
active_link(links);


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
    loadMode();
}
