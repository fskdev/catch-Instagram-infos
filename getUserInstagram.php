<?php

$urlInserida = $_GET["urlInstagram"];

if(isset($_GET["urlInstagram"])) {

    function getUser() {

        $urlInserida = $_GET["urlInstagram"];

        $dadosSite = file_get_contents($urlInserida);

        $varUser = explode('content="instagram://user?username=', $dadosSite);
        $user = explode('" />', $varUser[1]);

        print "Nome de Usuário: " . $user[0];
    
    }

    getUser();

} else {
    print "Erro: parametro 'urlInstagram' não localizado";
}

?>