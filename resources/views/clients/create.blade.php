@extends('layouts.app')
@section('titulo-pagina')
 <h1>Novo Cliente</h1>   
@endsection


@section('content')
      <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('clients.store')}}">

               {{ csrf_field() }}
               @include('clients.form')
               </form>
        <a href="{{route('clients.index')}}">Voltar para a lista de clientes</a>
        </div>
      </div>
@endsection


