<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('format_date')) {
    function format_date($date)
    {
        return \Carbon\Carbon::parse($date)->format('d/m/Y');
    }
}

if (!function_exists('getTitle')) {
    function getTitle($name)
    {
        $titre=[];
        switch ($name) {
            case 'home':
            return $titre=['titre'=>"Accueil",'retour'=>"home"];
                break;
            case 'apropos':
            return $titre=['titre'=>"Apropos",'t2'=>"Qui sommes-nous",'Pretour'=>"home",'PretourT'=>"Accueil"];
                break;
            case 'activites':
            return $titre=['titre'=>"Nos activités",'t2'=>"Toutes nos activités",'Pretour'=>"home",'PretourT'=>"Accueil"];
                break;
            case 'archives':
            return $titre=['titre'=>"Nos archives",'t2'=>"Tout nos archives",'Pretour'=>"home",'PretourT'=>"Accueil"];
                break;
            case 'contact':
            return $titre=['titre'=>"Contact",'t2'=>"Contactez-nous",'Pretour'=>"home",'PretourT'=>"Accueil"];
                break;
            case 'detailActivite':
            return $titre=['titre'=>"Activité",'t2'=>"Detail de l'activité",'Pretour'=>"home",'PretourT'=>"Accueil",'t3'=>"Activités",'retourT3'=>"activites"];
                break;
            case 'detailArchive':
            return $titre=['titre'=>"Archives",'t2'=>"Detail de l'archive",'Pretour'=>"home",'PretourT'=>"Accueil",'t3'=>"Archives",'retourT3'=>"archives"];
                break;

            default:
            return $titre=['titre'=>"",'t2'=>"",'Pretour'=>"home",'PretourT'=>"Accueil"];
                break;
        }
    }
}
if (!function_exists('active')) {
    function active($name)
    {
        $titre=Route::currentRouteName();
        switch ($name) {
            case $titre:
            return "current";
                break;

            default:
            return "";
                break;
        }
    }
}
