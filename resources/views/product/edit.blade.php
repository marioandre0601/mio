@extends('layout.master')
@section('title','Editar Producto')
@section('content')
<br><br><br>
<ol class="breadcrumb">
    <li><a href="{{route('dashboards')}}">Escritorio</a></li>
    <li><a href="{{route('product')}}">Productos</a></li>
    <li class="active">Editar Producto</li>
</ol>
<div class="page-header">
    <h1>Editar Producto</h1>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-title">
               Editar Producto
            </div>
            <div class="panel-body">
                {!!Form::model($product,['route'=>['product-update',$product->id],'method'=>'POST'])!!}
                <div class="form-group">
                    {!!form::label('Nombre')!!}
                    {!!form::text('name',null,['id'=>'name','class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('Precio')!!}
                    {!!form::text('price',null,['id'=>'price','class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('Marca')!!}
                    {!!form::select('marks_id',$marks,null,['id'=>'marks_id','class'=>'form-control'])!!}
                </div>
                {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    
</div>

@endsection