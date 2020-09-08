<?php

    include('cabecalho_conexao.php');

    $SQL = "SELECT * FROM pessoas";

    $dados_recuperados= mysqli_query($con, $SQL);
    
    if(mysqli_num_rows($dados_recuperados)>0) {

        while(($resultado = mysqli_fetch_assoc($dados_recuperados))!=null) {
            echo $resultado['id'] . " -" . $resultado['nome'] . " -" . $resultado['idade'] . "<br/>";
        }    


    } else {
        echo mysqli_error($con);
    }

    mysqli_close($con);


?>