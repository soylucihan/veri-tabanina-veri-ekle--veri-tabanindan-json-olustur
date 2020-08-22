<?php

$s='sonuc.json';
 selectall($s);

$firma='a';
$jsnn='firma.json';
 //firmacek($firma,$jsnn);


function selectall($s){
	include 'a.php';
$sql="select * from izmir"; 

$response = array();
$posts = array();

$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) 
{ 
$ad=$row['ad']; 
$aciklama=$row['aciklama']; 
$adres=$row['adres'];
$telefon=$row['telefon'];
$resim=$row['resim'];
$map=$row['map'];

$posts[] = array('ad'=> $ad, 
				 'aciklama'=> $aciklama,
				 'adres'=>$adres,
				 'telefon'=> $telefon,
				 'resim'=> $resim,
				 'map'=> $map);


} 

$response = $posts;

$fp = fopen($s, 'w');
fwrite($fp, json_encode($response));
fclose($fp);

mysqli_close($conn);
}


//firma çekme

function firmacek($firma,$jsnn){
	include 'a.php';
$sql="select * from izmir where kategori='".$firma."'"; 

$response = array();
$posts = array();

$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) 
{ 
$ad=$row['ad']; 
$aciklama=$row['aciklama']; 
$adres=$row['adres'];
$telefon=$row['telefon'];
$resim=$row['resim'];
$map=$row['map'];

$posts[] = array('ad'=> $ad,
				'aciklama'=> $aciklama,
				'adres'=>$adres,
				'telefon'=> $telefon,
				'resim'=> $resim,
				'map'=> $map);


} 

$response = $posts;

$fp = fopen($jsnn, 'w');
fwrite($fp, json_encode($response));
fclose($fp);

mysqli_close($conn);
}



?>