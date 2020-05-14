@extends('adminlte::page')

@section('title', "Detalhe do Plano {$plan->name}")

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
           <a class="nav-link active" href="{{ route('details.plans.index', $plan->url) }}">Detalhes</a>
        </li>
    </ul>
@stop

@section('content')
    <div class="card">
        <div class="card-header">

            @include('admin.includes.alerts')

           <div class="row">
            <div class="col col-12">
                <h1 class="text-right">
                   <a href="{{ route('details.plans.create', $plan->url) }}" class="btn btn-primary"
                    data-toggle="tooltip" data-placement="left"
                    title="Adicionar">
                     <i class="fas fa-plus-square"></i>
                   </a>
                </h1>
            </div>
           </div>
        </div>
      <div class="card-body">
         <table class="table table-condensed">
            <thead>
                <tr>
                  <th>Nome</th>
                  <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($details as $detail)
                 <tr>
                   <td>{{$detail->name}}</td>
                   <td width="50">
                      <div class="btn-group">
                           <a href="{{ route('details.plans.edit',  [$plan->url, $detail->id]) }}" class="btn btn-info btn-sm"
                                data-toggle="tooltip" data-placement="left"
                                title="Editar">
                                <i class="fas fa-edit"></i>
                           </a>
                           <a href="{{ route('details.plans.show', [$plan->url, $detail->id]) }}" class="btn btn-warning btn-sm"
                                data-toggle="tooltip" data-placement="top"
                                title="Ver">
                                <i class="fas fa-eye"></i>
                            </a>
                      </div>
                    </td>
                 </tr>
                @endforeach
            </tbody>
         </table>
      </div>
      <div class="card-footer">
          @if (isset($filters))
            {!! $details->appends($filters)->links() !!}
          @else
            {!! $details->links() !!}
          @endif
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

