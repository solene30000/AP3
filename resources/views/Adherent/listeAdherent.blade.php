
    @extends('template')

    @section('content')
    
    @foreach ($Adherent as $a)
        <p>{{$a->nom}}</p>
    @endforeach

    @endsection

