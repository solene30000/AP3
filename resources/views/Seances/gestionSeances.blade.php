@extends("template")

@section("content")

<br>

<h1> <strong> Séances proposées : </strong></h1>

<br>

<a class="btn btn-success" href="{{route('Seances.create')}}">Ajouter une nouvelle séance</a>

<br>
<br>

<table width="100%" height="200%" border="2px solid">
    <thead>
        <tr>
            <th> <h4>Séances </h4></th>
            <th colspan="2"><h4>Action</h4></th>
        <tr>
    </thead>

    <tbody>
        @foreach($LesSeances as $s)

        <tr>
            <td><a href="{{route('Seances.show', $s->idSeance)}}">{{$s->Film->titre}}<br><br></td>
       
            <td><a class="btn btn-primary" href="{{ route('Seances.edit', $s ->idSeance) }}"> Modifier </a><br></td>
        
            <td><form 
                    action="{{route('Seances.destroy', $s->idSeance)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>

        @endforeach
</tbody>
    
</table>

<br>
<br>



@endsection 
