<?php

$urlInserida = $_GET["urlInstagram"];

if(isset($_GET["urlInstagram"])) {

    function getDatePub() {

        $urlInserida = $_GET["urlInstagram"];

        $dadosSite = file_get_contents($urlInserida);

        $varDate = explode('"uploadDate":"', $dadosSite);
        $date = explode('T', $varDate[1]);

        print "Data de postagem: " . $date[0];
    
    }

    getDatePub();

} else {
    print "Erro: parametro 'urlInstagram' não localizado";
}

?>