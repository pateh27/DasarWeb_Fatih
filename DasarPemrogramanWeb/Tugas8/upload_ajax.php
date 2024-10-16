<?php 
    if(isset($_FILES['file'])){
        $errors = array();
        $file_name = $_FILES['file']['name'];
        $file_size =$_FILES['file']['size'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file_type=$_FILES['file']['type'];
        @$file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
        $extensions = array("pdf", "doc", "docx", "txt", "jpg", "jpeg", "png");

        if(in_array($file_ext, $extensions)=== false){
            $errors[]="Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, TXT.";
        }

        if($file_size > 2097152){
            $errors[]='Ukuran file tidak boleh melebihi 2 MB';
        }

        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"documents/".$file_name);
            echo "File $file_name berhasil diunggah";
        }else{
            print_r($errors);
        }
    }else{
        echo implode(" ",$errors);
    }
?>