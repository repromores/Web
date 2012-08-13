 <?php

//$email = $_SESSION["email"];
$email = "ramonkawa@gmail.com";

$carpeta    = date("Y-m-d_H-i") ."-00 - ".$email;


$local =  $_FILES['file']['tmp_name'];

//El tamaño por si lo necesitas
$tamano = $_FILES['file']['size'];

//nombre del archivo escogido para subir ..el cual vamos a utlizarlo para nombrar el archivo que quedará en el server FTP
$remoto = $_FILES['file']['name'];

$id_ftp = ftp_connect("localhost",21);
ftp_login ($id_ftp, "ftpmores", "ftpmores1");
ftp_pasv ($id_ftp, false);

//carpeta donde vamos a deja el archivo
echo(file_exists ("/monxas/".$carpeta));
if(!is_dir('ftp://ftpmores:ftpmores1@localhost/monxas/'.$carpeta)){
	ftp_mkdir($id_ftp, "/monxas/".$carpeta);	
}


ftp_chdir ($id_ftp, "/monxas/".$carpeta);
if (ftp_put($id_ftp,$remoto,$local,FTP_BINARY)){
//echo($tamano . " - ". $remoto);
}else{echo "No subio";}

ftp_quit($id_ftp); 
?> 