<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        //include_once('configs/configuration.php');
        include_once('views/includes/header.php');
        include_once('models/Artist.class.php');
        
        include_once('views/includes/navigator.php');
        
        
        
        
        
        
        //artist_id 	first_name 	middle_name 	last_name
        # create Tito
        //$artist = Artist::create(array('first_name' => 'Tito', 'middle_name' => 'Super'), 'last_name'=> 'jackson'));

        # read Tito
        $artist = Artist::find_by_first_name('Kyle');
        
        echo "artist first name: ".$artist->first_name."<br>";
        
        print_r(Artist::first()->attributes());

        # update Tito
        // blah blah balh
        $artist->last_name = 'Tito';
        $artist->save();
        
        $allArtists = Artist::all();
        
        foreach($allArtists as $oneArtist)
        {
            echo "<br> Artist name: ".$oneArtist->first_name."<br>";
        }

       # delete Tito
       //$user->delete();
        
        
        
        
        include_once('views/includes/footer.php');
        ?>
    
