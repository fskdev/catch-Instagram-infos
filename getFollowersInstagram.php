<?php

$urlInserida = $_GET["urlInstagram"];

if(isset($_GET["urlInstagram"])) {

    function getFollowers() {

        $urlInserida = $_GET["urlInstagram"];

        $dadosSite = file_get_contents($urlInserida);

        $varFollowers = explode('"userInteractionCount":"', $dadosSite);
        $followers = explode('"}},"', $varFollowers[1]);

        print "Total de seguidores: " . $followers[0];
    
    }

    getFollowers();

} else {
    print "Erro: parametro 'urlInstagram' não localizado";
}

?>