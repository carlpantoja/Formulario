<?php

$mensagem = '';
if(isset($_GET['status'])) {
    switch($_GET['status']) {
        case 'success':
            $mensagem = '<div>Ação realizada com sucesso!</div>';
            break;

        case 'error':
            $mensagem = '<div>Erro! Ação não executada.</div>';
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
                            <a href="pessoa/Controller/editar.php?id='.$p->id.'" id="editar"><i class="fa fa-pencil" aria-hidden="true">Editar</i></a>
                            <a href="pessoa/Controller/excluir.php?id='.$p->id.'" id="excluir" onClick="return confirm(\'Confirmar exclusão?\')"><i class="fa fa-trash" aria-hidden="true">Excluir</i></a>
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

                    <form method="post">
                        <select name="filtro" class="fa">
                            <option value="fa fa-filter"> &#xf0b0; Padrão</option>
                            <option value="nome">Nome</option>
                            <option value="idade">Idade</option>
                            <option value="genero-m">Gênero: M</option>
                            <option value="genero-f">Gênero: F</option>
                        </select>
                        <input type="submit" id="aplicar" value="Aplicar">
                    </form>


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