<?php
 
$ad_soyad     = $_POST["name"];
$email         = $_POST["email"];
$konu           = $_POST["subject"]
$mesaj        = $_POST["message"];
$adres        = "enderyazici@yandex.com.tr"; // Buraya e-postanin gonderilecegi mail adresini yaziniz
$konu        = "Iletisim Formu";
$tarih        = date('Y-m-d');
$ip_adresi    = $_SERVER['REMOTE_ADDR'];
 
if(($ad_soyad=="")  or ($konu=="") or ($email=="") or ($mesaj=="")){
 
echo "<center>Lutfen Ad Soyad, Telefon, E-Mail ve Mesaj alanlarini bos birakmayiniz.<br><a href=index.php>Geri don</a></center>";
 
}
else
{
 
$mesajveri.="ILETISIM FORMU MESAJI<br/><br/>";
$mesajveri.="E-Mail:  ".$email."<br/>";
$mesajveri.="Tarih:  ".$tarih."<br/>";
$mesajveri.="IP Adresi   :".$ip_adresi."<br/>";
$mesajveri.="Mesaj:  ".$mesaj;
 
$mesajyolla = mail($adres, $konu, $mesajveri, "Content-type: text/html; charset=utf-8\r\n");
 
if($mesajyolla)
{
 
echo "<center>Iletisim mailiniz bize ulasti, en kisa surede cevaplanacaktir. Ilginiz icin tesekkur ederiz.<br><a href=index.php>Anasayfa</a></center>";
 
}
else
{
 
echo "<center>E-Mail gonderilirken hata olustu! Lutfen daha sonra tekrar deneyiniz.</center>";
 
}
}
 
?>

