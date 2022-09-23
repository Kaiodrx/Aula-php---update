<?php

include "config.php";

    if(isset($_POST['update'])){
        $id = $_POST ['id'];
        $primeironome = $_POST ['primeironome'];
        $ultimonome = $_POST ['ultimoonome'];
        $email = $_POST ['email'];
        $password = $_POST ['password'];
        $genero = $_POST ['genero'];

        $sql = "UPDATE `usuario`.`formulario`SET `primeironome` = '$primeironome',
        `ultimonome` = '$ultimonome', 
        `email` = '$email', 
        `password` = '$password', 
        `genero` = '$genero' 
        WHERE `id`='$id' ";

        $result = $conn->query($sql);

        if ($result) == TRUE){
            echo "Atualização realizada com sucesso!"
            }else{
                echo "erro" .$sql. "<br>" . $conn->error;
            };
        }

            if(isset($_GET ['id'])){
                $id = $_GET['id'];
                $sql = "SELECT * FROM `usuario`, `formulario` WHERE `id`='$id'";
                $result = $conn->query($sql);

                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        $primeironome = $row['']

                    }
                }
            }
