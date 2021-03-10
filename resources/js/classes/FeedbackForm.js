import {enablePageScroll} from "scroll-lock";

export default class FeedbackForm {
    constructor()
    {
        this.form = document.querySelector('[data-feedback-form]');
        this.init_say_thanx()
    }

    init_say_thanx()
    {
        let that = this;

        Livewire.on('feedbackCollected', postId => {
            let thanx_block = document.createElement('div');
            that.form.innerHTML = '';

            fetch('/show_thanx_feedback')
                .then(function (response) {
                    return response.text();
                }).then(function (html) {
                    that.form.innerHTML = html;
            }).catch(function (err) {
                console.warn('Something went wrong.', err);
            });
        });
    }
}
