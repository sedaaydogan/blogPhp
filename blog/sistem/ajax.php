<?php 
   require_once "ayar.php";
   require_once "fonksiyon.php";
   
     if($_POST){
		 $tip=p("tip",true);
		 $sonuc=array();
		 Switch($tip){
			 
			 case "yorumEkle":
			 $adsoyad=p("adsoyad",true);
			 $eposta=p("eposta",true);
			 $yorum=p("yorum",true);
			 $konuid=p("konuid",true);
			 if(session("login")){
				 $adsoyad="uye";
				 $eposta="1";
			 }
			 if(!$adsoyad || !$eposta || !$yorum || is_numeric($adsoyad)){
				 $sonuc["hata"]="Lütfen boş alan bırakmayınız.";
				 
			 }else{
				 if(session("login")){
					 $adsoyad=session("uye_id");
				 }
				 $query=query("select konu_id from konular where konu_id='$konuid'");
				 if(mysql_affected_rows()){
					$insert = query("INSERT INTO yorumlar SET
					yorum_konu_id = '$konuid',
					yorum_ekleyen = '$adsoyad',
					yorum_icerik = '$yorum',
					yorum_eposta = '$eposta',
					yorum_onay = 0");
					
					if($insert){
						$yorumid=mysql_insert_id();
						$avatar=TEMA_URL."/images/noavatar.png";
						
						if(session("login")){
							$adsoyad=session("uye_kadi");
							$uid=session("uye_id");
							$query=query("select uye_avatar from uyeler where uye_id='$uid'");
							$row=row($query);
							$avatar=$row["uye_avatar"] ? $row["uye_avatar"]: TEMA_URL."/images/noavatar.png";
						}
						$sonuc["ok"]="Yorumunuz başarıyla eklendi.";
						$sonuc["text"]='<div id="yorum_'.$yorumid.'" class="yorum">
		     <div class="yorumSag">
			    <div class="yorumUst"><strong>@'.ss($adsoyad).'</strong> demiş ki;</div>
			    <div class="yorumText">'.nl2br(ss($yorum)).'</div>
		     </div>
		     <div class="avatar">
			    <img src="'.$avatar.'" alt=""/>
		     </div>
	         </div>';
						
					}else{
						
						$sonuc["hata"]="Bir sorun olustu ve yorumunuz eklenemedi.";
					}
					 
				}else{
					 $sonuc["hata"]="Geçersiz konu başlık.";
				}
			 }
			 
			 break;
		 }
		 echo json_encode($sonuc);
	 }


?>