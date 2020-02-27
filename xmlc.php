<body>
<h1>Notícias Dev Media</h1>
<?php
    include ('./error.php');
    $link = "http://www.devmedia.com.br/xml/devmedia_full.xml"; 
    //link do arquivo xml
    $xml = simplexml_load_file($link) -> channel; 
    //carrega o arquivo XML e retornando um Array
     
    foreach($xml -> item as $item){ 
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
    //    echo "<strong>Título:</strong> "
      //  .utf8_decode($item -> title)."<br />";
       // echo "<strong>Link:</strong> "
        //.utf8_decode($item -> link)."<br />";
        //echo "<strong>Descrição:</strong> "
        //.utf8_decode($item -> description)."<br />";
        echo "<strong>Autor:</strong> "
        .utf8_decode($item -> author)."<br />";
        echo "<strong>Data:</strong> "
        .utf8_decode($item -> pubDate)."<br />";
        echo "<br />";
    } //fim do foreach
?>
</body>
