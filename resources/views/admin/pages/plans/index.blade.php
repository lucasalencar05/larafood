@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos</h1>
@stop

@section('content')
    <div class="card">
      <div class="class card-header">
          #filtros
      </div>
      <div class="class card-body">
         <table class="table table-condensed">
            <thead>
                <tr>
                  <th>Nome</th>
                  <th>Preço</th>
                  <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                 <tr>
                   <td>{{$plan->name}}</td>
                   <td>{{$plan->price}}</td>
                   <td>
                       <button class="btn btn-primary">
                           <i class="fas fa-heart"></i>
                       </button>
                    </td>
                 </tr>
                @endforeach
            </tbody>
         </table>
      </div>
    </div>
@stop
