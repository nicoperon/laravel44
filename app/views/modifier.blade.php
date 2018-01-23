@extends('layouts.starter')
@section('title')
@stop
@section('contenu')

<h1>Modifier recettes</h1> <br>


<form method="post" class="w3-container">
    <p><label>Modifier le titre de votre recette :</label><br>
        <input type="text" name="titre" /></p>
    
    <p><label>Modifier la description de votre recette :</label><br>
        <textarea input type="text" name="description"></textarea></p>
    
    <label>Catégorie :</label>
    <select name="choix">
    <option value="Entrée">Entrée</option>
    <option value="Plat">Plat</option>
    <option value="Dessert">Dessert</option>
    <option value="Boisson">Boisson</option>
    </select>
    <br> <br>
    
    <p><label>Modifier les ingrédients de votre recette :</label><br>
        <textarea name="ingredients"></textarea></p>
    <div id="divImg" class="fa fa-camera"> Modifier votre photo :</div>
							<span><input type="file" name="photo" accept=".gif,.jpg,.png,.jpeg" /><input type="hidden" class="src" /><input type="hidden" class="name" /><canvas style="display:none"></canvas></span>
    
    <input type="submit" class="btn btn-warning" value="Modifier"></input>
</form>
    
<a href="{{ url('/')}}">Retournez à l'accueil</a>


@stop