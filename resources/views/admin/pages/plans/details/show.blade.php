@extends('adminlte::page')

@section('title', "Detalhes {$detail->name}")

@section('content_header')
    <h1>Detalhes <b>{{ $detail->name }}</b></h1>
@stop

@section('content')
    <div class="card">
      <div class="class card-body">
         <ul>
             <li>
                 <strong>Nome: </strong> {{ $detail->name }}
             </li>
         </ul>
         <form action="{{ route('details.plans.destroy', [$plan->url, $detail->id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-danger"
                  data-toggle="tooltip" data-placement="left"
                  title="Excluir o detalhe {{ $detail->name }}">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
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
