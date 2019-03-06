<?php

$urlInserida = $_GET["urlInstagram"];

if(isset($_GET["urlInstagram"])) {

    function getComments() {

        $urlInserida = $_GET["urlInstagram"];

        $dadosSite = file_get_contents($urlInserida);

        $varComments = explode('"commentCount":"', $dadosSite);
        $comments = explode('","', $varComments[1]);

        print "Total de comentários: " . $comments[0];
    
    }

    getComments();

} else {
    print "Erro: parametro 'urlInstagram' não localizado";
}

?>