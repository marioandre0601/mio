@extends('layout.master')
@section('title','Lista de Productos')
@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('dashboards')}}">Escritorio</a></li>
    <li class="active">Productos</li>
</ol>
<div class="page-header">
    <h1>Productos<small>Actualizados hasta hoy</small></h1><br>
    <br>
</div>
<div class="row">
    <div class="col-md-8">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                Lista
                <p class="navbar-text navbar-right" style="margin-top: 1px">
                    <button type="button" id="nuevo" name="nuevo" class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">
                        Nuevo
                    </button>  
                </p>
            </div>
            <div class="panel-body">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Marca</th>
                        <th>Acción</th>
                    </thead>
                    <tbody>
                        @foreach($product as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->mark }}</td>
                            <td><a href="{{ route('product-edit',$product->id)}}">[Editar]</a>
                                <a href="{{ route('product-show',$product->id)}}">[Eliminar]</a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>
<script>
    $("#nuevo").click(function(event){
        document.location.href="{{ route('product-create')}}";
    });
</script>

@endsection