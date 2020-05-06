@include('admin.includes.alerts')

<div class="form-group">
    <label for="name">Nome:</label>
  <input type="text" name="name" value="{{ $detail->name ?? old('name') }}" class="form-control" placeholder="Nome">
</div>
<div class="card-footer text-right">
    <button type="submit" class="btn btn-success"
      data-toggle="tooltip" data-placement="left"
      title="Enviar"
    >
        <i class="fas fa-check"></i>
    </button>
</div>
