<?php
if (isset($_POST['submit'])) {

	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);

    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg' , 'jpeg' , 'png' ,'pdf' ,'mp4');

    if (in_array($fileActualExt, $allowed)) {
    	
    	if ($fileError === 0) {

    		if ($fileSize < 100000000) {
    			
    			$fileNewName = uniqid('',true).".".$fileActualExt;
    			$fileDestination = 'uploads/'.$fileNewName;
    			move_uploaded_file($fileTmpName, $fileDestination);
    			header("Location: success.php?uploadsuccess");
    		}

    		else{

    			echo "your file is tooo big";
    		}

    		
    	}

    	else{

    		echo "there was a error in the file";
    	}
    }

    else
    {
    	echo "you cannot allowed to upload this file type";
    }



}