@extends('template')

@section('content')

<br>

<h1> <strong> Séances proposées : </strong></h1>

<br>
<br>

<!-- @foreach($LesSeances as $uneSeance)
<h3> <strong> {{$uneSeance->Film->titre}} </strong></h3>

<br>

    <h3>{{$uneSeance->dateSeance}}</h3>
    <ul>
        <li>{{$uneSeance->heureDeb}}</li>
        <li>{{$uneSeance->heureFin}}</li>
    </ul>

<br>
@endforeach -->
    
<table width="100%" height="200%" border="2px solid">
    <thead>
        <tr>
            <th> </th>
            <th colspan="2"></th>
        <tr>
    </thead>

    <tbody>
    @foreach($LesSeances as $uneSeance)

        <tr>
            <td><strong> {{$uneSeance->Film->titre}} <br><br></strong></td>
       
            <td>{{$uneSeance->dateSeance}}</td>
        
            
        </tr>

        @endforeach
</tbody>
    
</table> 
    

@endsection