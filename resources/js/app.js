require('./bootstrap');

import CallbackFrom from './classes/CallbackFrom'
import FeedbackFrom from './classes/FeedbackForm'

document.addEventListener('DOMContentLoaded', () => {
    new CallbackFrom();
    new FeedbackFrom();
})
