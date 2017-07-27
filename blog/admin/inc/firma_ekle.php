<html lang="en">
<head>
	
	
</head>
<body>

      <div ></div>

		
			<header><h3 style="margin-left:20">FİRMA ISLEMLERI</h3></header>
			<?php
			
		     if($_GET){
			
					 $firmaAd=$_GET["firmaAd"];
					 $tel=$_GET["tel"];
					 $fax=$_GET["fax"];
					 $adres=$_GET["adres"];
			  
			        echo $firmaAd;
			  
			  
			 }	  

	?> 
             <form action="" method="get">
				<div >
				        
						<fieldset>
							<label>FİRMA ADI</label>
							<input type="text" name="firmaAd"/>
						</fieldset>
						<fieldset>
							<label>TELEFON</label>
							<input type="text" name="tel"/>
						</fieldset>
						<fieldset>
							<label>FAX</label>
							<input type="text" name="fax"/>
						</fieldset>
						<fieldset>
							<label>ADRES</label>
							<input type="text" name="adres"/>
						</fieldset>
						
						
				</div>
			<footer>
				<div>
				  <input type="submit" value="Firma kaydet!" >
				  
				</div>
			</footer>
			</form>
			
		  
	</body>
</html>		