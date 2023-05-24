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
                                        <th>Adresse</th>
                                        <th>Code Postal</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>
                                {{$LeAdherent->nom}}
                                </td>
                                <td>
                                {{$LeAdherent->prenom}}
                                </td>
                                <td>
                                {{$LeAdherent->adresse}}
                                </td>
                                <td>
                                {{$LeAdherent->CP}}

                                </td>
                                <td>
                                {{$LeAdherent->telephone}}
                                </td>
                                <td>
                                {{$LeAdherent->courriel}}
                                </td>
                                <td>
                                <td><a class="btn btn-primary" href="{{ route('Adherent.edit', $LeAdherent ->idAdherent) }}"> Modifier </a><br></td>    
                                </td>
                                </tr>

        </div>

    </div>

</div>

</tbody>


@endsection