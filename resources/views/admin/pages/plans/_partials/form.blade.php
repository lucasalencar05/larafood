@include('admin.includes.alerts')

<div class="form-group">
    <label for="name">Nome:</label>
  <input type="text" name="name" value="{{ $plan->name ?? old('name') }}" class="form-control" placeholder="Nome">
</div>
<div class="form-group">
    <label for="price">Preço:</label>
    <input type="text" name="price" value="{{ $plan->price ?? old('price') }}" class="form-control" placeholder="Preço">
</div>
<div class="form-group">
    <label for="description">Descrição:</label>
    <input type="text" name="description" value="{{ $plan->description ?? old('description') }}" class="form-control" placeholder="Descrição">
</div>
<div class="card-footer text-right">
    <button type="submit" class="btn btn-success"
      data-toggle="tooltip" data-placement="left"
      title="Enviar"
    >
        <i class="fas fa-check"></i>
    </button>
</div>
