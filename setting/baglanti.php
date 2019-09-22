<?php

try{

    $db=new PDO('mysql:host=localhost;dbname=blogscript;charset=utf8;','root');

}catch(PDOException $a)
{
      echo  $a->getMessage();
}

?>