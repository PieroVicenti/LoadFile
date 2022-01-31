<?php

if($_SERVER["REQUEST_METHOD"]== "POST"){
    if(isset($_FILES["photo"])&& $_FILES["photo"]["error"] == 0){
        $estensioni_permesse = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $nome_file = $_FILES["photo"]["name"];
        $tipo_file = $_FILES["photo"]["type"];
        $dimensione_file = $_FILES["photo"]["size"];
    }

    //Verify files' extension
    $estensione = pathinfo($nome_file, PATHINFO_EXTENSION);
    if(!array_key_exists($estensione, $estensioni_permesse)) die("Error: select a valid format");

    //Verify max size
    $dimensione_massima = 5 * 1024 * 1024;
    if($dimensione_file > $dimensione_massima) die ("Error: Please respect the size");

    //Verify type of MIME
    if(in_array($tipo_file, $estensioni_permesse)){
        //Check if the file exists already
        if(file_exists("upload/" . $nome_file)){
            echo $nome_file . "The selected file already exists.";
        }else{
            move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $nome_file);
            echo "File correctly uploaded";
        }
    }else{
        echo "Errore: " . $_FILES["photo"]["error"];
    }
}

?>