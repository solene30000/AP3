@extends("template")

@section('content')
<center>
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h2>Mon espace personnel</h2>
                </div>

                <div class="card-body">
                    <a class="btn btn-success" href="{{route('Seances2.index')}}">CRUD des séances</a>
                </div>

                <div class="card-body">
                    <a class="btn btn-secondary" href="{{route('Personnel.index')}}">Modifier mon profil</a>
                </div>
</div>

</center>
<br>

</div>

@endsection