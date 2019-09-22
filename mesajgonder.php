<?php

include"setting/baglanti.php";


extract($_POST);
if ($_POST){
    if (!$name || !$email || !$subject || !$message){
        echo json_encode("bos");
    }else{
        $mesajlar=$db->prepare('INSERT INTO mesajlar SET ad=?,email=?,subject=?,message=?');
        $insert=$mesajlar->execute(array($name,$email,$subject,$message));
        if ($insert){
            echo json_encode("yes");
        }else{
            echo json_encode("no");        }
    }
}
?>

