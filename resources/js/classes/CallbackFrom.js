import {disablePageScroll, enablePageScroll} from "scroll-lock";

export default class CallbackFrom {
    constructor() {
        this.layout = document.querySelector('.contact-form-layout');
        this.button = document.querySelector('#contact_form_trigger');
        this.close = document.querySelector('.contact-form-close');
        this.form = document.querySelector('.contact-form');

        this.form.classList.add('as-none');

        this.set_listeners();
    }

    set_listeners() {
        let that = this;

        this.button.addEventListener('click', function () {
            if (that.form.classList.contains('as-none')) {
                that.form.classList.remove('as-none');
                that.toggle_layout(false);
                disablePageScroll();
            }
        });

        this.close.addEventListener('click', () => {
            that.form.classList.toggle('as-none');

            that.toggle_layout(false);

            if (that.form.classList.contains('as-none')) {
                enablePageScroll();
                that.toggle_layout(true);
            }
        });

        Livewire.on('contactCollected', postId => {
            let thanx_block = document.createElement('div');
            that.form.innerHTML = '';

            fetch('show_thanx')
                .then(function (response) {
                    return response.text();
                }).then(function (html) {

                thanx_block.innerHTML = html;
                that.form.appendChild(thanx_block);

                that.layout.addEventListener('click', function () {
                    enablePageScroll();
                    that.toggle_layout(true);
                    that.form.classList.add('as-none');
                });

            }).catch(function (err) {
                console.warn('Something went wrong.', err);
            });
        });
    }

    toggle_layout(action) {
        if (action) {
            this.layout.classList.add('as-none');
        } else {
            this.layout.classList.remove('as-none');
        }
    }
}
