@if(session()->has('flash_message'))
    <div class="alert alert-{{ session('flash_message_level') }}">
        <strong>{{ session('flash_message') }}</strong>
    </div>
@endif