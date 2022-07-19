<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        <div style="color: white"> {{ __('Update Password') }}</div>
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Current Password') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('New Password') }}" />
            <input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>




{{-- ------------------


<x-jet-form-section submit="updatePassword">
    
    <x-slot name="title">
        
    </x-slot>

    <x-slot name="description">
    </x-slot>
    <x-slot name="form" class="form">
        
        {{-- <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Current Password') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div> --}}

        {{-- <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('New Password') }}" />
            <input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div> --}}

        {{-- <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div> --}}
        {{-- <div class="row">
            <div class="col-12">
                <h4 class="form__title">Change password</h4>
            </div>

            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                <label class="form__label" for="current_password">current Password</label>
                <input  class="form__input" id="current_password" type="password" wire:model.defer="state.current_password" autocomplete="current-password">
                <x-jet-input-error for="current_password" class="mt-2" style="color: red"/>
            </div>

            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                <label class="form__label" for="newpass">New Password</label>
                <input  id="password" type="password" wire:model.defer="state.password" autocomplete="new-password" class="form__input">
                <x-jet-input-error for="password" class="mt-2" style="color: red"/>
            </div>

            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                <label class="form__label" for="confirmpass">Confirm New Password</label>
                <input id="password_confirmation" type="password" wire:model.defer="state.password_confirmation" autocomplete="new-password" class="form__input">
                <x-jet-input-error for="password_confirmation" class="mt-2" style="color: red" />
            </div>

            <div class="col-12">
                <button class="form__btn" type="submit">Change</button>
            </div>
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-jet-action-message>
        </div>
    </x-slot>

    <x-slot name="actions">
   

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>  --}}






