@extends('adminlte::page')

@section('title', 'Cadastrar plano')

@section('content_header')
    <h1>Cadastrar Plano</h1>
@stop

@section('content')
    <div class="card">
      <div class="class card-header">
      </div>
      <div class="class card-body">
         <form action="{{ route('plans.store') }}" class="form" method="POST">
             @csrf

             @include('admin.pages.plans._partials.form')
         </form>
      </div>
    </div>
@stop

@section('js')
    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@stop
