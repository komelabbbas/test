@if (Session::has('flash_notification'))
    <div 
        class="notify d-none" 
        data-driver="notie" 
        data-notify="{{ Session::get('flash_notification')[0]->level }}" 
        data-message="{{ Session::get('flash_notification')[0]->message }}" >
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