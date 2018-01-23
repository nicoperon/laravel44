<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',function(){
	return View::make('layouts.starter');
});

/* Recettes */

Route::get('/contact',function(){
	return View::make('contact');
});
/* Qui sommes nous? */
Route::get('/qui',function(){
	//return View::make('qui');
	$data = array(
		"nom" =>"Peron",
		"prenom" => "Nicolas",
		"email" => "nicolas.peron@ynov.com"
		);
	return View::make('qui', $data);
});


Route::post('/contact',function() {  
	$donnees = Input::all();
	foreach ($donnees as $key => $input) {
		echo $key." : ".$input."<br>";

	}
    $contact = new Contact;
    $contact->titre = $donnees['titre'];
    $contact->description = $donnees['description'];
    $contact->choix = $donnees['choix'];
    $contact->ingredients = $donnees['ingredients'];
    $contact->photo = $donnees['photo'];

    if ($contact->save()) {
		$destinationPath = 'img/' . $contact->id . '/';
		if (Input::hasFile('photo')) {
			$upload_success = Input::file('photo')->move($destinationPath, "photo.jpg");
		}else {
			if (!file_exists($destinationPath)) {
				mkdir($destinationPath, 0777, true);
			}
			copy( 'img/photo.jpg' , 'img/' . $contact->id . '/photo.jpg');
		}
	}
$contact->save();
     return Redirect::route('contacts');
});

Route::get('/Contacts',array('as' => 'contacts', function(){
    $contacts= Contact::all(); 
    $data['contacts'] = $contacts;
    return View::make('contacts',$data);
}));


/* Supprimer recette */
Route::get('/contact/delete/{id}',array( 'as' => 'contactdelete', function($id) {  
	$contact = Contact::find($id);
    $contact->delete();
    
    return Redirect::route('contacts');
	
}));

/* Modifier recettes */
Route::get('/modifier/{id}', array( 'as' => 'modifier', function($id){
	$data['contact'] = Contact::find($id);

	return View::make('modifier', $data);
}));

Route::post('/modifier/{id}', array( 'as' => 'modifier', function($id){
	$contact = Contact::find($id);
	$contact->titre = Input::get("titre");
    $contact->description = Input::get("description");
    $contact->choix = Input::get("choix");
    $contact->ingredients = Input::get("ingredients");
    $contact->photo = Input::get("photo");
	$contact->save();
    return Redirect::route('contacts');
}));

/*Modifier ingrédients */
Route::get('/modifieri/{id}', array( 'as' => 'modifieri', function($id){
	$data['contact'] = Contact::find($id);

	return View::make('modifieri', $data);
}));

Route::post('/modifieri/{id}', array( 'as' => 'modifieri', function($id){
	$contact = Contact::find($id);
   $contact->ingredients = Input::get("ingredients");
	$contact->save();
    return Redirect::route('contacts');
}));

