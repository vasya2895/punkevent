
<?php
$date=$_POST['date'];
$place=$_POST['place'];
$fuck=$_POST['fuck'];
$anon=$_POST['anon'];
$user=$_POST  ['logined'];
$header=$_POST['header'];
include 'conf.php'; 
$img;
if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
{
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
 move_uploaded_file($_FILES["filename"]["tmp_name"], "img/".$_FILES["filename"]["name"]);
 $img="img/".$_FILES["filename"]["name"];
}
$query = "INSERT INTO VPUNK (time,place,fuck,anon,user,img,header) VALUES ('".$date."','".$place."','".$fuck."','".$anon."','".$user."','".$img."','".$header."')";
if ( mysql_query ( $query ) ){
  echo $date."','".$place."','".$fuck."','".$anon;
}
else{
  echo mysql_error();
}
mysql_close ( $connect);
?>