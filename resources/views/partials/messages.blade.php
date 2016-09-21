@if(Session::has('save'))
<div class="alert alert-success">
    {{ Session::get('save') }}
</div>
@endif
