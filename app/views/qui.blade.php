@extends('layouts.starter')
@section('titre')
	<h1>Qui sommes Nous ? </h1>
@stop




@section('contenu')
	
	<p>Contenu de la page</p>
	<img src="logo.png" width='200'>
	<img src="logo.png" width='200'>



	<p> {{$prenom}} {{$nom}} :<br> 
		adresse mail: {{$email}} </p>
@stop