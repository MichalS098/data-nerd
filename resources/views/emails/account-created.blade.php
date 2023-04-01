@component('mail::message')
    {{ __('Hello :name', ['name' => $user->name]) }}

    {{ __('Thank you for creating an account with us!') }}

    {{ __('You may login by clicking the button below:') }}

    @component('mail::button', ['url' => $loginUrl])
        {{ __('Login') }}
    @endcomponent

    {{ __('If you did not expect to receive this email, you may discard this email.') }}
@endcomponent
