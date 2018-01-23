@extends('layouts.starter')
@section('titre')
@stop
@section('contenu')

<!-- Titre -->
<h1 style="color:#C60800;"><i class="fa fa-cutlery" aria-hidden="true"></i> Voici la liste de vos Recettes :</h1>
<br />
@foreach($contacts as $contact)
<!-- Liste recettes -->
<p>PHOTO : </p>
<img src="{{ asset('img/' . $contact->id . '/photo.jpg')}}" class="recetteImg"><br>
    <p>Tittre :{{$contact->titre}}</p>
    <p>Description :{{$contact->description}}</p>  
    <p>Choix :{{$contact->choix}}</p>  
    <p>Ingrédients :{{$contact->ingredients}}</p>
   
        <a href="{{ route('modifier', $contact->id) }}" class="btn btn-warning">Modifier la Recette</a>
        <a href="{{ route('modifieri', $contact->id) }}" class="btn btn-warning">Modifier les ingrédients</a>
        <a href="{{ route('contactdelete',$contact->id)}}" class="btn btn-danger">Supprimer la recette</a>

<br />
<br />

@endforeach
<!-- Retour accueil -->
<a style="color:#0000FF;" href="{{ url('/')}}">Retournez à l'accueil</a>

@stop