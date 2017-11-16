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
        <h1>Pesquise o Produto</h1>
        <form role="form" action="detalhes_produto.php" method="post">
            <label for="Produto">Nome do Produto:</label>
            <select name="idProduto" id="idProduto">
                <option value="1">Cadeira</option>
                <option value="2">Mesa</option>
                <option value="3">Sofá</option>
                <option value="4">Estante</option>
            </select>
            <button type="submit">Ver Detalhes</button>
        </form>
    </center>
   
</body>

</html>