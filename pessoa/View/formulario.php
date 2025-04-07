
            <main>
                <section>
                    <a href="../../index.php"> <button>Voltar</button> </a>
                </section>

                <section class="formulario">
                    <form method="post" onSubmit="return validarDados()">
                        <label for="nome">Nome: 
                            <input type="text" name="nome" id="nome" value="<?=$objPessoa->nome?>">
                        </label>

                        <br><br>

                        <label for="email">Email: 
                            <input type="email" name="email" id="email" value="<?=$objPessoa->email?>">
                        </label>

                        <br><br>

                        <label for="idade">Idade: 
                            <input type="number" name="idade" id="idade" value="<?=$objPessoa->idade?>">
                        </label>
                        
                        <br><br>

                        <label for="genero">Gênero: 
                            <input type="radio" name="genero" id="masc" <?=$objPessoa->genero == 'M' ? 'checked' : ''?> value="M"> Masculino
                            <input type="radio" name="genero" id="fem" <?=$objPessoa->genero == 'F' ? 'checked' : ''?> value="F"> Feminino
                        </label>

                        <br><br>

                        <label for="data_nasc">Data de Nascimento: 
                            <input type="date" name="data_nasc" id="data_nasc" value="<?=$objPessoa->data_nasc?>">
                        </label>

                        <br><br>

                        <input type="submit" id="enviar" value="Enviar">
                    </form>
                </section>
            </main>

            <script src="../../includes/validar_dados.js"></script>