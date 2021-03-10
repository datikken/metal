<div class="col-sm-8 col-md-8 col-md-pull-4">
    <div class="content">

        <h3 class="section-heading-2">
            Обратная связь
        </h3>

        <div class="ajax-result-form3"></div>

        <form wire:submit.prevent="saveFeedback"
              class="form-contact"
              name="form3" id="form3"
              enctype="multipart/form-data">
            <div class="form-group">
                @error('name') <span class="error">{{ $message }}</span> @enderror
                <input type="text" wire:model="name" class="form-control" name="name" id="name" placeholder="Ваше имя">
            </div>
            <div class="form-group">
                @error('email') <span class="error">{{ $message }}</span> @enderror
                <input type="text" wire:model="email"  class="form-control" name="email" id="email" placeholder="Электронная почта">
            </div>
            <div class="form-group">
                @error('tel') <span class="error">{{ $message }}</span> @enderror
                <input type="text" wire:model="tel"  class="form-control" name="tel" id="tel" placeholder="Телефон">
            </div>
            <div class="form-group">
                @error('message') <span class="error">{{ $message }}</span> @enderror
                <textarea name="message" wire:model="message"  id="text" class="form-control" rows="6" placeholder="Сообщение"></textarea>
            </div>
            <div class="form-group">
                <div class="field_accept">
                    Нажимая кнопку "Отправить", я даю своё согласие на обработку персональных данных в соответствии с законом ФЗ-152 О персональных данных.
                </div>
            </div>

            <div class="form-group">
                <div id="success"></div>
                <button type="submit" class="btn btn-secondary disabled" style="pointer-events: all; cursor: pointer;" id="button_form3">Отправить</button>
            </div>
        </form>

    </div>
</div>
