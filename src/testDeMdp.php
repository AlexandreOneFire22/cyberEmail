<?php
function passgen1($nbChar) {
    $chaine ="mnoTUzS5678kVvwxy9WXYZRNCDEFrslq41GtuaHIJKpOPQA23LcdefghiBMbj0";
    srand((double)microtime()*1000000);
    $pass = '';
    for($i=0; $i<$nbChar; $i++){
        $pass .= $chaine[rand()%strlen($chaine)];
    }
    return $pass;
}

function passgen2($nbChar){
    return substr(str_shuffle(
        'abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789'),1, $nbChar); }

//for ($i = 1; $i <= 10; $i++){
//    echo passgen1(10);
//    echo PHP_EOL;
//}

function mdp($x){
    //Création de la séquence aléatoire à la base du mot de passe
    $octetsAleatoires = openssl_random_pseudo_bytes ($x) ;
    //Transformation de la séquence binaire en caractères alpha
    $motDePasse = sodium_bin2base64($octetsAleatoires, SODIUM_BASE64_VARIANT_ORIGINAL);
    return $motDePasse;
}

//for ($i = 1; $i <= 44; $i++){
//    echo mdp(8)."       ",mdp(9)."       ",mdp(10)."       ",mdp(11)."       ",mdp(12);
//    echo PHP_EOL;
//}


function passgen3($nbChar)
{
    $chaine = "ABCDEFGHIJKLMONOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789&é'(-è_çà)=$^*ù!:;,~#{[|`\^@]}¤€";
    $pass = '';
    for ($i = 0; $i < $nbChar; $i++) {
        $pass .= $chaine[random_int(0,strlen($chaine)-1)];
    }
    return $pass;
}


for ($i = 1; $i <= 10; $i++){
    echo passgen3(10);
    echo PHP_EOL;
}







