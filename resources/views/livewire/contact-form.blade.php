<div class="formblock contact-form">
    <h1>Обратный звонок</h1>
    <p class="ajax-result-form2">Укажите Ваш номер телефона и имя</p>
    <form wire:submit.prevent="saveContact">
        <table class="form_table">
            <tbody>
            <tr>
                <td>
                    <div class="form_label">
                        <label>Телефон</label>
                    </div>
                    @error('tel') <span class="error">{{ $message }}</span> @enderror
                    <input wire:model="tel"
                           name="tel"
                           id="tel"
                           value=""
                           class="form-control"
                           type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form_label">
                        <label>Ваше имя</label>
                    </div>
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                    <input wire:model="name" name="name" id="name" value="" class="form-control" type="text">
                </td>
            </tr>
            <tr>
                <td style="padding: 0px; padding-top: 15px; text-align: center;">

                    <div class="field_accept_callback">
                        Нажимая кнопку "Отправить", я даю своё согласие на обработку персональных данных в соответствии
                        с законом ФЗ-152 О персональных данных.
                    </div>

                    <button wire:click="$emit('saveContact')" type="submit" class="btn btn-cta">
                        Отправить
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <button type="button" class="fancybox-button fancybox-close-small contact-form-close" title="Close">
        <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
            <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
        </svg>
    </button>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let form = document.querySelector('.contact-form');
        let close = document.querySelector('.contact-form-close');
            form.classList.add('as-none');
            close.addEventListener('click', () => form.classList.toggle('as-none'))

        let button = document.querySelector('#contact_form_trigger');
            button.addEventListener('click', function() {

            if(form.classList.contains('as-none')) {
                form.classList.remove('as-none');
            }
        });

        Livewire.on('contactCollected', postId => {
            form.classList.add('as-none');
        });
    })
</script>
