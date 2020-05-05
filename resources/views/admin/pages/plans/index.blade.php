@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <ul class="nav nav-tabs">
        <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">Dashboard</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="{{ route('plans.index') }}">Planos</a>
        </li>
    </ul>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
           <div class="row">
            <div class="col col-10">
            <form action="{{ route('plans.search') }}" method="POST" class="form form-inline">
              @csrf
              <div class="input-group mb-1">
                <input type="text" value="{{ $filters['filter'] ?? '' }}" name="filter" placeholder="Nome" class="form-control">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-dark"
                      data-toggle="tooltip" data-placement="right"
                      title="Filtrar"
                    >
                        <i class="fas fa-search"></i>
                    </button>
                </div>
              </div>
            </form>
            </div>
            <div class="col col-2">
                <h1 class="text-right">
                   <a href="{{ route('plans.create') }}" class="btn btn-primary"
                    data-toggle="tooltip" data-placement="left"
                    title="Adicionar"
                   >
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
                  <th>Preço</th>
                  <th>Descrição</th>
                  <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                 <tr>
                   <td>{{$plan->name}}</td>
                   <td>{{number_format($plan->price, 2, ',', '.')}}</td>
                   <td>{{$plan->description}}</td>
                   <td width="50">
                      <div class="btn-group">
                           <a href="{{ route('plans.edit',  $plan->id) }}" class="btn btn-info btn-sm"
                                data-toggle="tooltip" data-placement="left"
                                title="Editar">
                                <i class="fas fa-edit"></i>
                           </a>
                           <a href="{{ route('plans.show',  $plan->url) }}" class="btn btn-warning btn-sm"
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
            {!! $plans->appends($filters)->links() !!}
          @else
            {!! $plans->links() !!}
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

