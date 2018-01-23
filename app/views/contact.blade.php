@extends('layouts.starter')
@section('title')
@stop
@section('contenu')

<!-- Titre -->
<h1 style="color:#C60800;"><i class="fa fa-cutlery" aria-hidden="true"></i> Ajouts de recettes</h1> <br>

<!-- Création recettes -->
<form method="post" class="w3-container">
  <p><label>Ajouter un titre à votre recette :</label><br>
    <input type="text" name="titre" /></p>
    
  <p><label>Ajouter une description à votre recette :</label><br>
    <textarea input type="text" name="description"></textarea></p>
    
    <label>Catégorie :</label>
    <select name="choix">
    <option value="Entrée">Entrée</option>
    <option value="Plat">Plat</option>
    <option value="Dessert">Dessert</option>
    <option value="Boisson">Boisson</option>
    </select>
    <br> <br>
    
  <p><label>Ajouter les ingrédients de votre recette :</label><br>
    <textarea name="ingredients"></textarea></p>
        
    <label> Photo :</label>
<input type="file" name="photo" id="fileToUpload">
<br /> <br />

<!-- Bouton ajouter -->
<input type="submit" class="btn btn-success" value="ajouter">
</form>
 
<!-- Retour accueil -->
<a style="color:#0000FF;" href="{{ url('/')}}">Retournez à l'accueil</a>
@stop