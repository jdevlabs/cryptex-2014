<?php 
$flag=0;
$file=$_SERVER['DOCUMENT_ROOT']."/include/".$_GET['pid']."/main.php" ;
echo $file ;
$bool=file_exists($file);

echo '<br/><br/></br>' ; 

if (!$bool) 
  $flag=10; if(isset($_GET['pid']))
  {
  
    if($flag == 0 )
      include "".$_GET['pid']."/main.php" ; 
    else
      include "404/main.php" ; 
      
  }
  else
  {
  
    include "default/main.php" ; 
  }
  ?>
  