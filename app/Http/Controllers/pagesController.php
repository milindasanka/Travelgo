<?php

namespace App\Http\Controllers;

class pagesController extends Controller{
    public function getIndex(){
        return view ('pages.welcome');

    }

    public function getAbout(){
        return view ('pages.about');

    }

    public function getContact(){
        return view ('pages.contact');
    }

    public function getEllamount(){
        return view ('pages.Ellamount');
    }

    public function getShangrilla(){
        return view ('pages.Shangrilla');
    }

    public function getAraliya(){
        return view ('pages.Araliya');
    }

    public function getJetwing(){
        return view ('pages.Jetwing');
    }

    public function getLagoon(){
        return view ('pages.Lagoon');
    }

    public function getTajsouth(){
        return view ('pages.Tajsouth');
    }

    public function getwilde(){
        return view ('pages.wilde');
    }

    public function getDeersabra(){
        return view ('pages.Deersabra');
    }

    public function getmahora(){
        return view ('pages.mahora');
    }




}

?>
