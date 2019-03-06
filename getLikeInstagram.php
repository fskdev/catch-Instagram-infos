<?php

$urlInserida = $_GET["urlInstagram"];

if(isset($_GET["urlInstagram"])) {

    function getLikes() {

        $urlInserida = $_GET["urlInstagram"];

        $dadosSite = file_get_contents($urlInserida);

        $varLikes = explode('"LikeAction"},"userInteractionCount":"', $dadosSite);
        $likes = explode('"},"', $varLikes[1]);

        print "Likes: " . $likes[0];
    
    }

    getLikes();

} else {
    print "Erro: parametro 'urlInstagram' não localizado";
}

?>