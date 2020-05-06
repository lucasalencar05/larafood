@extends('adminlte::page')

@section('title', "Adicionar novo detalhe ao plano {$plan->name}")

@section('content_header')
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.index') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('plans.index') }}">Planos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('plans.show', $plan->url) }}">{{$plan->name}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('details.plans.index', $plan->url) }}">Detalhes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('details.plans.create', $plan->url) }}">Novo</a>
        </li>
    </ul>
@stop

@section('content')
    <div class="card">
      <div class="class card-header">
      </div>
      <div class="class card-body">
         <form action="{{ route('details.plans.store', $plan->url) }}" class="form" method="POST">
             @csrf

             @include('admin.pages.plans.details._partials.form')
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
