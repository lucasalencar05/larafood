@if ($errors->any())
    <div class="alert alert-warning">
        @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if (session('message'))
    <div class="alert alert-info">

        {{ session('message') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">

        {{ session('error') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
