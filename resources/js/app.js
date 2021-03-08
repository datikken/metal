import {disablePageScroll, enablePageScroll} from 'scroll-lock';

require('./bootstrap');
require('alpinejs');

let layout = document.querySelector('.contact-form-layout');
let button = document.querySelector('#contact_form_trigger');
let close = document.querySelector('.contact-form-close');
let form = document.querySelector('.contact-form');

function toggle_layout(action) {
    if (action) {
        layout.classList.add('as-none');
    } else {
        layout.classList.remove('as-none');
    }
}

document.addEventListener("DOMContentLoaded", function () {
    form.classList.add('as-none');

    close.addEventListener('click', () => {
        form.classList.toggle('as-none');

        toggle_layout(false);

        if (form.classList.contains('as-none')) {
            enablePageScroll();
            toggle_layout(true);
        }
    })

    button.addEventListener('click', function () {
        if (form.classList.contains('as-none')) {
            form.classList.remove('as-none');
            disablePageScroll();
            toggle_layout(false);
        }
    });

    Livewire.on('contactCollected', postId => {
        let thanx_block = document.createElement('div');
        form.innerHTML = '';

        fetch('show_thanx')
            .then(function (response) {
                return response.text();
            }).then(function (html) {
                thanx_block.innerHTML = html;
                form.appendChild(thanx_block);

            layout.addEventListener('click', function () {
                enablePageScroll();
                toggle_layout(true);
                form.classList.add('as-none');
            });

        }).catch(function (err) {
            console.warn('Something went wrong.', err);
        });
    });
});
