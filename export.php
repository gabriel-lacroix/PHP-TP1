<?php 
$contenu =date('d-m-Y');
$file="export"+$contenu.txt;
$fp=fopen($file,"w" ); // ouverture du fichier 
fputs($fp,$contenu); // enregistrement des données ds le fichier 
fclose($fp);
?>