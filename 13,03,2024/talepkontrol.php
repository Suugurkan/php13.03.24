<head> 
<style>
 div{
 margin:auto;
 margin-top:20px;
 height:auto;
 width:300px;
 color:white;
 border:2px solid black;
 padding:2px;
 text-align:center;
 margin-left:10px;
 }
 .guvensiz{
 background:red;
 }
 .guvenli{
 background:green;
 }
 table{
 color:white;x
 }
 </style>
</head>
<body>
<?php
$adisoyadi=$_POST['adisoyadi'];
$mesaj= $_POST['mesaj'];
echo "<div class='guvensiz'>
       <h4> Güvensiz Form</h4>
 <table>
 <tr>
 <td>Gönderen:</td>
 <td>$adisoyadi</td>
 </tr>
 <tr>
 <td>Mesaj:</td>
 <td>$mesaj</td>
 </tr>
 </table>
 </div>";
 echo "<div class='guvenli'>
 <h4>Güvenli Form</h4>
 <table>
 <tr>
 <td>Gönderen:</td>
 <td>$gadisoyadi</td>
 </tr>
 <tr>
 <td>Mesaj:</td>
 <td>$gmesaj</td>
 </tr>
 </table>
 </div>";
?>
</body>