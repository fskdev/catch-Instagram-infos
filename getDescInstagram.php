<?php

/*
Não é apresentado corretamente EMOJIs e simbolos.
*/

$urlInserida = $_GET["urlInstagram"];

if(isset($_GET["urlInstagram"])) {

    function getDesc() {

        $urlInserida = $_GET["urlInstagram"];

        $dadosSite = file_get_contents($urlInserida);

        $varDesc = explode('"description":"', $dadosSite);
        $description = explode('","', $varDesc[1]);

        print $description[0];
    
    }

    getDesc();

} else {
    print "Erro: parametro 'urlInstagram' não localizado";
}

?>