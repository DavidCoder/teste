<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogo</title>
</head>

<body>
   
    <center>
        <div>
            <h1>Detalhes do Produto</h1>
            <?php
                 $idProduto = $_POST['idProduto'];

                 $detalhes[1] = "Detalhes da Cadeira";
                 $detalhes[2] = "Detalhes da Mesa";
                 $detalhes[3] = "Detalhes do Sofá";
                 $detalhes[4] = "Detalhes da Estante";
                 
                 echo $detalhes[$idProduto];

            ?>
        </div>
    </center>
</body>

</html>