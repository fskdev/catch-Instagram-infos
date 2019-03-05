<?php

$urlInserida = $_GET["urlInstagram"];

if(isset($_GET["urlInstagram"])) {

    function getPub() {

        $urlInserida = $_GET["urlInstagram"];

        $dadosSite = file_get_contents($urlInserida);

        $varPub = explode('"edge_owner_to_timeline_media":{"count":', $dadosSite);
        $pub = explode(',"p', $varPub[1]);

        print "Total de publicações: " . $pub[0];
    
    }

    getPub();

} else {
    print "Erro: parametro 'urlInstagram' não localizado";
}

?>