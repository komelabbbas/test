@if (Session::has('flash_notification'))
    <div 
        class="notify d-none" 
        data-driver="notie" 
        data-notify="{{ collect(Session::get('flash_notification'))['level'] }}" 
        data-message="{{ collect(Session::get('flash_notification'))['message'] }}" >
    </div>
@endif

@if($errors->any())
    <div 
        class="notify hidden-xs-up" 
        data-driver="notie" 
        data-notify="error" 
        data-message="{{ $errors->first() }}"
        >
    </div>
@endif

{{ \Session::forget('flash_notification') }}