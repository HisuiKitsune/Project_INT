<?php
    require_once ('../php/produto_crud.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style-form.css">
    <title>Formulário de Produtos</title>
</head>
<body>
    <?php include "../php/Navbar-menu.php" ?>
    <div class="container">
        <fieldset>
            <h1>Registro de Produtos</h1>
                <form action="../php/produto_register.php" method="POST">
                    <div class="form-group">
                    <label for="nome">Nome do Produto</label>
                    <input class="form-control" type="text" id="nomePro" name="txtnome_pro" required>
                    </div>   
                    <div class="form-group">
                    <label for="valor">Valor(R$)</label>
                    <input class="form-control" type="text" id="valor" name="txtvalor_pro" required>
                    <div class="form-group">
                    <label for="unidades">Unidades</label>
                    <input class="form-control" type="text" id="qtd" name="txtqtd_pro" required>
                    </div>             
                    <div class="form-group">
                    <label for="categoria" class="form-label">Categoria</label>
                        <select class="form-control" aria-label="Selecione uma Categoria" name="txtid_categoria" id="categoria" required>
                        <option selected disabled> Selecione uma categoria </option>
                        <?php foreach (listCategoria() as $categoria) : ?>
                        <option value="<?= $categoria->id_categoria ?>"><?= $categoria->nome_cat ?></option>
                        <?php endforeach; ?>
                    </div>
                    </select>
                        <button class="btn btn-dark" type="submit">Cadastrar</button>
                </form>                
        </fieldset>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
    </html> 