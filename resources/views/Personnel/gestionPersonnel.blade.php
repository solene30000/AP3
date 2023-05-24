@extends("template")

@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h2>Mon profil</h2>
                </div>
<br>

<div class="table-responsive">
                            <table class="table">
                            <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Specialité</th>
                                        <th>Diplôme</th>
                                        <th>Expérience</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>
                                {{$LePersonnel->adherent->nom}}
                                </td>
                                <td>
                                {{$LePersonnel->adherent->prenom}}
                                </td>
                                <td>
                                {{$LePersonnel->specialite}}
                                </td>
                                <td>
                                {{$LePersonnel->dernierDiplome}}

                                </td>
                                <td>
                                {{$LePersonnel->nbAnneeExperience}}
                                </td>
                                <td>
                                <td><a class="btn btn-primary" href="{{ route('Personnel.edit', $LePersonnel ->idAdherent) }}"> Modifier </a><br></td>    
                                </td>
                                </tr>

        </div>

    </div>

</div>

</tbody>


@endsection