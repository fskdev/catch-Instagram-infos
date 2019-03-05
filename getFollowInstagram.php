<?php

$urlInserida = $_GET["urlInstagram"];

if(isset($_GET["urlInstagram"])) {

    function getFollow() {

        $urlInserida = $_GET["urlInstagram"];

        $dadosSite = file_get_contents($urlInserida);

        $varFollow = explode('"edge_follow":{"count":', $dadosSite);
        $follow = explode('},"', $varFollow[1]);

        print "Seguindo: " . $follow[0] . " pessoas";
    
    }

    getFollow();

} else {
    print "Erro: parametro 'urlInstagram' não localizado";
}

?>