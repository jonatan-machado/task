@extends('layouts.app')
@section('titulo-pagina')
 <h1>Lista de Clientes</h1>   
@endsection


@section('content')
      <div class="row">
        <div class="col-md12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($clients as $client)
                <tr>
                  <td>{{$client->id}}</td>
                  <td>
                    <a href="{{route('clients.show',$client->id)}}">{{$client->name}}</a>
                  </td>
                  <td>
                    {{$client->email}}</td>
                  <td>
                    <a class="btn btn-success" href="{{route('clients.edit',$client->id)}}">Editar</a>
                    <form style="display:inline" action="{{route('clients.destroy',$client->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja remover?')">Deletar</button>
                    </form>
                  <td>
                  </tr>
              @empty
                <tr><td> Nenhum Cliente Cadastrado! </td></tr>
              @endforelse
             
            </tbody>
          </table>

          <a href="{{route('clients.create')}}">Criar Cliente</a>
        </div>
      </div>
@endsection


