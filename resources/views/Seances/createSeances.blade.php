@extends ('template')

@section('content') 

<h1><center><strong>Création d'une nouvelle séance</center></strong></h1>
<br>

<form method="post" action="{{route ('Seance.store') }}">
@csrf



    <div class="form-group row">
        <label for="titre" class="col-sm-4">Intitulé de la séance : </label>
        <input type="text" class="form-control col-sm-6" name="titre" required>
    </div>

    <br>
    <br>

    <div class="form-group row">
        <label for="idCat" class="col-sm-4">Type de film :</label>
        <select name="idCat" id="idCat">
            <option value="">--Choisir une catégorie--</option>
                @foreach($LesCategoriesFilm as $c)
                    <option type="text" name="idCat" value="idCat">{{$c->nomCat}}</option>
                @endforeach
        </select>
    </div>

    <br>
    <br>

    <div class="form-group row">
        <label for="dateSeance" class="col-sm-4">Date :</label>
        <input type="date" class="form-control col-sm-6" name=dateSeance required>
    </div>

    <br>
    <br>

    <div class="form-group row">
        <label for="heureDeb" class="col-sm-4">Début du film :</label>
        <input type="time" class="form-control col-sm-6" name=heureDeb required>
    </div>

    <br>
    <br>

    <div class="form-group row">
        <label for="duree" class="col-sm-4">Durée du film :</label>
        <input type="time" class="form-control col-sm-6" name=duree required>
    </div>


<br>
<br>

<button type="submit" class="btn btn-primary">Ajouter</button>

@endsection