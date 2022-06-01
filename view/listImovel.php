<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lista de Imóvel</title>
</head>

<body>
    <h1>Imóveis</h1>
    <hr>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <?php
             
                require_once "../controller/ImovelController.php";
               
                $imoveis = call_user_func(array('ImovelController', 'listar'));
                if (isset($imoveis)) {
                    foreach ($imoveis as $imovel) {
                ?>
                        <tr>
                          
                            <td><?php echo $imovel->getId(); ?></td>
                            <td><?php echo $imovel->getDescricao(); ?></td>
                            <td><?php echo "<img class='fotoCasa' src='" . $imovel->getFoto() . "'>" ?></td>
                            <td><?php echo $imovel->getValor(); ?></td>
                            <td><?php echo $imovel->getTipo(); ?></td>
                            <td>
                                <a href="">Editar</a>
                                <a href="">Excluir</a>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="3">Nenhum registro encontrado</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>