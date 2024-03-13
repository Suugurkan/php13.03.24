<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function bolme($sayi1, $sayi2) {
 $sonuc=0;
 try{
 
 if($sayi2==0){
 throw new Exception("<i style=‘color:red’>Hatalı İşlem Yapıldı</i>");

 }
 $sonuc=$sayi1/$sayi2;
 return $sonuc; 
 }
 catch(Exception $e)
 { 
 echo $e->getMessage();
 }
}
echo "<i style=‘color:darkblue’>".bolme(16,4)."</i><br>";
echo "<i style=‘color:darkblue’>".bolme(34,0)."</i><br>";
echo "<i style=‘color:darkblue’>".bolme(6,3)."</i><br>";
echo "<i style=‘color:darkblue’>".bolme(25,0)."</i><br>";
?>
<?php
function tablo($satir, $sutun) { 
 try{ 
 if((is_numeric($satir) && is_numeric($sutun))) 
 {
 echo "<table style=‘border: solid 5px orange’>";
 for($i=0; $i<$satir; $i++) {
 echo "<tr>";
 for($j=0; $j<$sutun; $j++){
 echo "<td style=‘border: solid 5px gray’>".$i.",".$j."</td>";
 }
 echo "</tr>";
 }
 echo "</table>";
 }
 else{
 throw new Exception("<i style=‘color:red; background-color:gray’>
         Lütfen satır ve sütun bilgisi için sadece sayı giriniz.</i>");
 } 
 }catch(Exception $e) {
echo $e->getMessage();
 }
}
tablo(5,10); 
tablo("dort","beş");
?>

</body>
</html>