@extends("template")

@section("content")


<h1><center><strong>Modification d'une nouvelle séance</strong></center></h1>
<br>

<form  action="{{route ('Seance.update', $Seance->idSeance) }}" method="POST">
    
@csrf
@method('PUT')

    

        <div class="form-group row">
            <label for="titre" class="col-sm-4">Intitulé de la séance : </label>
            <input value="{{$Seance->Film->titre}}" type="text" class="form-control col-sm-6" name=titre required>
        </div>
    

        <br>
        <br>

    <div class="form-group row">
        <label for="nomCat" class="col-sm-4">Type de film :</label>
        <input value="{{$Seance->Film->CategorieFilm->nomCat}}" type="text" class="form-control col-sm-6" name=nomCat required>
    </div>

        <br>
        <br>


    <div class="form-group row">
        <label for="dateSeance" class="col-sm-4">Date :</label>
        <input value="{{$Seance->dateSeance}}" type="date" class="form-control col-sm-6" name=dateSeance required>
    </div>

        <br>
        <br>

    <div class="form-group row">
        <label for="heureDeb" class="col-sm-4">Début du film :</label>
        <input value="{{$Seance->heureDeb}}" type="time" class="form-control col-sm-6" name=heureDeb required>
    </div>

        <br>
        <br>

    <div class="form-group row">
        <label for="duree" class="col-sm-4">Durée du film :</label>
        <input value="{{$Seance->Film->duree}}" type="time" class="form-control col-sm-6" name=duree required>
    </div>


<br>
<br>

<button type="submit" class="btn btn-primary">Modifier</button>

@endsection