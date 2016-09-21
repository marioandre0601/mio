@extends('layout.master')
@section('title','Eliminar Producto')
@section('content')
<br><br><br>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboards')}}">Escritorio</a></li>
    <li><a href="{{ route('product')}}">Productos</a></li>
    <li class="active">Eliminar</li>
</ol>

<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Eliminar
            </div>
            <div class="panel-body">

                {!! Form::open(['route'=>['product-destroy',$products->id],'method'=>'POST'])!!}
                <div class="form-group">
                    <label for="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO:</label>
                </div>
                <div class="form-group">
                    {!!form::label('Producto')!!}
                    {!!$products->name !!}
                </div>
                <div class="form-group">
                    {!!form::label('Precio')!!}
                    {!!$products->price !!}
                </div>
                {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-sm m-t-10']) !!}

                <button type="button" href="{{route('product')}}" id='cancelar' name='cancelar' class="btn btn-default btn-sm m-t-10">Cancelar</button>
                
                {!!Form::close()!!}
            </div>
        </div>
    </div>

</div>

@endsection