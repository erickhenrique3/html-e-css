<?php
    require 'conexao.php';

    $query = "SELECT * FROM tabela1";
    
    $data = mysqli_query($conexao, $query);
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo 'Lista de usuários' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-bottom-dark p-3" data-bs-theme="dark">
        <h1 class="text-light">Lista de usuários</h1>
        <a class="nav-link text-light fs-5" href="index.html">Home</a>
    </nav>
    <div class="container mt-3">
        <table class="table">
            <thead class="table-dark">
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($get = mysqli_fetch_array($data)) {
                ?>
                <tr class="text-center">
                    <th scope="row">1</th>
                    <td><?php echo $get['nome'] ?></td>
                    <td><?php echo $get['email'] ?></td>
                    <td><?php echo $get['telefone'] ?></td>
                    <td><?php echo $get['idade'] ?></td>
                    <td>
                        <button type="button" class="btn btn-primary p-2 d-inline-flex align-items-center gap-2"><i class="fa-regular fa-pen-to-square"></i> Editar</button>
                        <button type="button" class="btn btn-danger p-2 d-inline-flex align-items-center gap-2"><i class="fa-solid fa-trash"></i> Deletar</button>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>