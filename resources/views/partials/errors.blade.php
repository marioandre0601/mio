asdz<br>
asdz<br>
asdz<br>
asdz<br>
error

@if(count($errors)>0)
errores
<div class="alert alert-danger" style='margin-top: 130px'>
    <p><strong>Oops!</strong>Please fix the following errors:</p>
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach 
    </ul>  
</div>
@endif
