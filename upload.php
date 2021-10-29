<?php
    session_start();
    if ($_SESSION['nonce'] === $_POST['nonce'] && !empty($_FILES['payload'])) {
        $info = pathinfo($_FILES['payload']['name']);
        $fname = $_FILES['payload']['tmp_name'];
        // new file must be less than 10mb
        if (filesize($fname) < 10 * pow(1024, 2))
            move_uploaded_file($fname, "./audio.wav"); //changer le nom du fichier par un nom random
        $_SESSION['nonce'] = '';
    }


// PHP program to delete a file named gfg.txt 
// using unlike() function 
   
$file_pointer = "gfg.txt"; //changer ça par le nom du fichier audio
   
// Use unlink() function to delete a file 
if (!unlink($file_pointer)) { 
    echo ("$file_pointer cannot be deleted due to an error"); 
} 
else { 
    echo ("$file_pointer has been deleted"); 
} 

    exit;