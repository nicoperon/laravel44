@extends('starter')
@section('titre')
	Bienvenue !
@stop




@section('contenu')
	@parent
	<p>Contenu de la page</p>
	<img src="logo.png" width='500'>
@stop