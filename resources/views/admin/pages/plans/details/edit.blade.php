@extends('adminlte::page')

@section('title', "Editar detalhe ao plano {$detail->name}")

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
            <a class="nav-link active" href="{{ route('details.plans.create', [$plan->url, $detail->id]) }}">Editar</a>
        </li>
    </ul>
@stop

@section('content')
    <div class="card">
      <div class="class card-header">
      </div>
      <div class="class card-body">
         <form action="{{ route('details.plans.update', [$plan->url, $detail->id]) }}" class="form" method="POST">
             @csrf
             @method('PUT')

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
