<?php

$mensagem = '';
if(isset($_GET['status'])) {
    switch($_GET['status']) {
        case 'success':
            $mensagem = '<div>Cadastrado com sucesso!</div>';
            break;

        case 'error':
            $mensagem = '<div>Erro! Infelizmente não foi possível fazer o cadastro.</div>';
            break;
    }
}

$resultados = '';
foreach($objPessoa as $p) {
    $resultados .= '<tr>
                        <td>'.$p->id.'</td>
                        <td>'.$p->nome.'</td>
                        <td>'.$p->email.'</td>
                        <td>'.$p->idade.'</td>
                        <td>'.$p->genero.'</td>
                        <td>'.$p->data_nasc.'</td>
                        <td>
                            <a href="pessoa/Controller/editar.php?id='.$p->id.'" id="editar">Editar</a>
                            <a href="pessoa/Controller/excluir.php?id='.$p->id.'" id="excluir" onClick="return confirm(\'Confirmar exclusão?\')">Excluir</a>
                        </td>
                    </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
                                                        <td>Nenhuma pessoa encontrada.</td>
                                                    </tr>';

?>
            
            <main>
                <div class="mensagem">
                    <?=$mensagem?>
                </div>

                <section class="cadastro">
                    <a href="pessoa/Controller/cadastrar.php"> <button>Cadastrar</button> </a>
                </section>

                <section>
                    <table class="usuarios">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Idade</th>
                                <th>Gênero</th>
                                <th>Data de Nascimento</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?=$resultados?>
                        </tbody>
                    </table>
                </section>
            </main>