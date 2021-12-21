// **RENDER IMG**
const img = document.querySelector('#img');
const render_img = document.querySelector('#render-img');

const renderING = (e) => {
    if (e.target.files[0]) {
        const file = URL.createObjectURL(e.target.files[0]);
        render_img.setAttribute('src', file);
    }
}

img.addEventListener('change', renderING);

// **INPUT CHANGE STYLE**
const inputs = document.querySelectorAll('.data-box input,textarea');

const changeModeInputs = (e) => {
    e.target.value ? e.target.classList.add('input-active') : e.target.classList.remove('input-active');
}
inputs.forEach(input => {
    input.addEventListener('change', changeModeInputs);
});