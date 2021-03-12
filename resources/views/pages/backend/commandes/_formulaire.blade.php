<form action="{{ route('commande.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group row">
    <label for="inputPassworda" class="col-sm-4 col-form-label">Désignation </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="repas" id="inputPassworda"  value="">
    </div>
</div>
<div class="form-group row">
    <label for="inputPasswordb" class="col-sm-4 col-form-label">Description</label>
    <div class="col-sm-8">
        <textarea class="form-control" name="description" id="inputPasswordb" {{ $obligatoire }}></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="inputPasswordd" class="col-sm-4 col-form-label">Image </label>
    <div class="col-sm-8">
        <input type="file" class="form-control" name="image" id="inputPasswordd" {{ $obligatoire }} value="">
    </div>
</div>
<div class="form-group row">
    <label for="inputPasswordv" class="col-sm-4 col-form-label">Prix</label>
    <div class="col-sm-8">
        <input type="number" class="form-control" name="prix" id="inputPasswordv" {{ $obligatoire }} value="">
    </div>
</div>
<hr>

<div class="mx-auto text-center">
    <button class="btn btn-outline-success" type="submit"> {{ $btn }} </button>
    <button class="btn btn-outline-dark" type="reset"> Annuler </button>
</div>


</form>