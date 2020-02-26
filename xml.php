<?php
// Receberá todos os dados do XML
$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';

// A raiz do meu documento XML
$xml .= '<links>';

// Loop dos valores
for ( $i = 0; $i < count( $meus_links ); $i++ ) {
	$xml .= '<link>';
	$xml .= '<id>' . $meus_links[$i]['id'] . '</id>';
	$xml .= '<title>' . $meus_links[$i]['title'] . '</title>';
	$xml .= '<description>' . $meus_links[$i]['description'] . '</description>';
	$xml .= '<image>' . $meus_links[$i]['image'] . '</image>';
	$xml .= '</link>';
}

// Fechamento da raiz
$xml .= '</links>';
?>
