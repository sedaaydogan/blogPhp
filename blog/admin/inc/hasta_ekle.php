<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>ECZANE </title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	
</head>
<body>

<?php 



$dbhost ="";

$dbkullanici = "root";
lanici adi Localhostta Çalıştıgımız için burasida root olacak,eger bir host kıralasaydınız,Host şirketini verdigi kullanici adini yazacaktınız

$dbsifre = "";

$dbadi = "SANALKURS";








$baglanti = mysql_connect($dbhost,$dbkullanici,$dbsifre);

if(! $baglanti){



echo "Mysql baglantisi Saglanamadi";



}else{

echo "Veritabanina Baglandim";

}



//Yukarida $baglanti adında bir degişken oluşturduk ve mysql_connect dedik ,Yani Mysql'a bağlan dedik,sonra parantezlerimizi açarak içerisine 3 arguman girdik,"$dbhost,$dbuser,$dbpass" bunlar degişmez 3 lüdür biz her kodlamamzıda veritabaina baglanmak için bu 3 argumanlari yazacağız...:)

//Ve if kontrolu oluşturduk,Dedik ki eger veritabanina baglanamazsa "Mysql Baglantisi Sağlanamadi desin"

//else kontrolu ilede eger veritabanina baglanirsa "Veritabanina Baglandim Desin"



?>
      <div class="spacer"></div>

		<article class="module width_full">
			<header><h3 style="margin-left:20">HASTA ISLEMLERI</h3></header>
			<?php
			
		     if($_POST){
			
					 $tcKimlikNo=$_POST["tcKimlikNo"];
					 $hastaAd=$_POST["hastaAd"];
					 $hastaSoyad=$_POST["hastaSoyad"];
					 $sosyalGuvence=$_POST["sosyalGuvence"];
					 $adres=$_POST["adres"];
					 $tel=$_POST["tel"];
			  
			         $stmt=odbc_prepare($conn,"INSERT INTO Hasta (tcKimlikNo,hastaAd,hastaSoyad,sosyalGuvence,adres,tel)
							VALUES ('$tcKimlikNo','$hastaAd','$hastaSoyad','$sosyalGuvence','$adres','$tel');");
							
			        if(!odbc_execute($stmt)){
							echo '<h4 class="alert_error">Kayit basarisiz..</h4>';
					  
					}else{
						
						 echo '<h4 class="alert_success">Hasta kayitlara eklendi..</h4>';
						
					}
			  
			  
			 }	  

	?> 
             <form action="" method="post">
				<div class="module_content">
				        <fieldset>
							<label>HASTA TC KIMLIK NO</label>
							<input type="text" name="tcKimlikNo"/>
						</fieldset>
						<fieldset>
							<label>HASTA ADI</label>
							<input type="text" name="hastaAd"/>
						</fieldset>
						<fieldset>
							<label>HASTA SOYADI</label>
							<input type="text" name="hastaSoyad"/>
						</fieldset>
						<fieldset>
							<label>SOSYAL GUVENCE</label>
							<input type="text" name="sosyalGuvence"/>
						</fieldset>
						<fieldset>
							<label>ADRES</label>
							<input type="text" name="adres"/>
						</fieldset>
						<fieldset>
							<label>TELEFON</label>
							<input type="text" name="tel"/>
						</fieldset>
						
				</div>
			<footer>
				<div class="submit_link">
				  <input type="submit" value="hasta kaydet!" class="alt_btn">
				  
				</div>
			</footer>
			</form>
			</article>
		  
	</body>
</html>		