 @extends('layouts.starter')
@section('title')
@stop



@section('contenu')



<h1>Modifier recettes</h1> <br>


<form method="post" class="w3-container">
<p><label>Modifier les ingrédients de votre recette :</label><br>
        <textarea name="ingredients"></textarea></p>
    
    <input type="submit" class="btn btn-warning" value="Modifier"></input>
</form>
    
<a href="{{ url('/')}}">Retournez à l'accueil</a>


@stop