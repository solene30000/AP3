@extends ('template')

@section('content')

<h1>Modification du profil</h1>


<form  action="{{route ('Personnel.update', $LePersonnel->idAdherent) }}" method="POST">
@csrf
@method('PUT')

<div class="row">

    <div class="cold-md-5"></div>

    <div class="form-group row">
        <label for="specialite" class="col-sm-4">Specialite</label>
        <input value="{{$LePersonnel->specialite}}" type="text" class="form-control col-sm-6" name=specialite required>
    </div>

    <div class="form-group row">
        <label for="dernierDiplome" class="col-sm-4">Diplome</label>
        <input type="text" value="{{$LePersonnel->dernierDiplome}}" class="form-control col-sm-6" name=dernierDiplome required>
    </div>

    <div class="form-group row">
        <label for="nbAnneeExperience" class="col-sm-4">Expérience</label>
        <input value="{{$LePersonnel->nbAnneeExperience}}" type="text" class="form-control col-sm-6" name=nbAnneeExperience required>
    </div>

    

</div>

<br>
<br>
<button type="submit" class="btn btn-primary">Modifier</button>

</form>
@endsection
