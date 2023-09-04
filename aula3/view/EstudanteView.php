<?php $estudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="row text-center">
        <h2>Semana da acessibilidade</h2>
    </div>

    <div>
        <img class="rounded" src="https://cta.ifrs.edu.br/boas-praticas-para-descricao-de-imagens/" alt="">
    </div>
    <br>
    <a href="/aula3/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar estudante</a>
    <br>
    <br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudantes as $estudanteAtual) { ?>
                <tr>
                    <td><?php echo $estudanteAtual['id']; ?></td>
                    <td><?php echo $estudanteAtual['nome']; ?></td>
                    <td><?php echo $estudanteAtual['idade']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>