<?php 

class ContactsTableSeeder extends Seeder {
    public function run() {
        DB::table('contacts')->insert(
           
        );
        
    for($i = 0; $i < 100 ; $i++) {
        $data = [
            'titre' => "Bob $i",
            'description' => "Dupont $i",
            'choix' => "sujet du contact bob $i",
            'ingredients' => "un message pour bob $i",
        ];
        $dataset[] = $data;
    }
        DB::table('contacts')->insert($dataset);
    
    }
}