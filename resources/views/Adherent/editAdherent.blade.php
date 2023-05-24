@extends ('template')

@section('content')

<br>

<h1>Modification du profil</h1>


<form  action="{{route ('Adherent.update', $LeAdherent->idAdherent) }}" method="POST">
@csrf
@method('PUT')

<div class="row">

    <div class="cold-md-5"></div>

    <div class="form-group row">
        <label for="nom" class="col-sm-4"><strong>Nom</strong></label>
        <input value="{{$LeAdherent->nom}}" type="text" class="form-control col-sm-6" name=nom required>
    </div>

    <br>

    <div class="form-group row">
        <label for="prenom" class="col-sm-4"><strong>Prénom</strong></label>
        <input type="text" value="{{$LeAdherent->prenom}}" class="form-control col-sm-6" name=prenom required>
    </div>

    <br>

    <div class="form-group row">
        <label for="adresse" class="col-sm-4"><strong>Adresse</strong></label>
        <input value="{{$LeAdherent->adresse}}" type="text" class="form-control col-sm-6" name=adresse required>
    </div>
    
    <br>

    <div class="form-group row">
        <label for="CP" class="col-sm-4"><strong>Code Postal</strong></label>
        <input value="{{$LeAdherent->CP}}" type="text" class="form-control col-sm-6" name=CP required>
    </div>

    <br>

    <div class="form-group row">
        <label for="telephone" class="col-sm-4"><strong>Téléphone</strong></label>
        <input value="{{$LeAdherent->telephone}}" type="text" class="form-control col-sm-6" name=telephone required>
    </div>

    <br>
    
    <div class="form-group row">
        <label for="courriel" class="col-sm-4"><strong>Email</strong></label>
        <input value="{{$LeAdherent->courriel}}" type="text" class="form-control col-sm-6" name=courriel required>
    </div>

    

</div>

<br>
<br>
<button type="submit" class="btn btn-primary">Modifier</button>

</form>
@endsection
