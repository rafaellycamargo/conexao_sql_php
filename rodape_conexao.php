<?php
    $query = mysqli_query($con, $SQL);
    if($query) {
    
        echo "Operacao realizada com sucesso!";
        echo "Aluno inserido com sucesso<br/>";
        echo "<a href='menu.php'>Voltar</a>";

    } else {
        echo mysqli_error($con);
    }

    mysqli_close($con);
?>