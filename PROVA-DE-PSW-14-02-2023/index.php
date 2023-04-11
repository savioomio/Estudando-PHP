<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styler.css">
    <title>Gestão de
        Estágio</title>
</head>

<body>
    <header id="cabeçalho">

        <div class="conteudo">

            <div class="caixa-titlo">
                <h1>Gestão de Estágio</h1>

                <div></div>

                <p>Administrador</p>
            </div>

            <div class="menu">
                <div class="menus">Solicitações </div>
                <div class="menus">Períodos Letivos</div>
                <div class="menus">Cursos</div>
                <div class="menus">Disciplinas</div>
                <div class="menus">Oferta ao aluno</div>
            </div>        
            
            <div class="caixa-sair">
            <p>Sair</p>

            <img src="sair-alt.png" alt="">
        </div>
        </div>



    </header>




    <main id="corpo">

        <div class="conteudo-for">

            <div class="titlo">

                <h1>Cadastro de unidade concedente</h1>

            </div>

            <div class="caixa-formulario">

                <form class="form" action="dados.php" method="post">

                    <div class="caixa-per">
                        <div class="for-medio">
                            <label for="empresa">Razáo Social da empresa</label>
                            <input type="text" name="empresa" id="empresa" required>
                        </div>

                        <div class="for-medio">
                            <label for="CNPJ/CPF">CNPJ/CPF</label>
                            <input type="tel" name="CNPJ/CPF" id="CNPJ/CPF" required>
                        </div>
                    </div>

                    <div class="caixa-per">
                        <div class="for-grande">
                            <label for="Nome">Nome fantasia</label>
                            <input type="text" name="Nome" id="Nome" required placeholder="Digite seu email">
                        </div>
                    </div>

                    <div class="caixa-per">
                        <div class="for-medio">
                            <label for="E-mail">E-mail</label>
                            <input type="email" name="E-mail" id="E-mail" required>
                        </div>

                        <div class="for-medio">
                            <label for="Telefone">Telefone</label>
                            <input type="tel" name="Telefone" id="Telefone" required>
                        </div>
                    </div>

                    <div class="caixa-per">
                        <div class="for-medio-grande">
                            <label for="Endereço">Endereço</label>
                            <input type="tel" name="Endereço" id="Endereço" required>
                        </div>

                        <div class="for-pequeno">
                            <label for="numero">N°</label>
                            <input type="number" name="numero" id="numero" required>
                        </div>
                    </div>

                    <div class="caixa-per">
                        <div class="for-medio">
                            <label for="Bairro">Bairro</label>
                            <input type="text" name="Bairro" id="Bairro" required>
                        </div>

                        <div class="for-medio">
                            <label for="CEP">CEP</label>
                            <input type="tel" name="CEP" id="CEP" required>
                        </div>
                    </div>

                    <div class="caixa-per">
                        <div class="for-medio">
                            <label for="Cidade">Cidade</label>
                            <input type="text" name="Cidade" id="Cidade" required>
                        </div>

                        <div class="for-medio">
                            <label for="Estado">Estado</label>
                            <input type="text" name="Estado" id="Estado" required>
                        </div>
                    </div>

                    <div class="caixa-per">
                        <div class="for-medio">
                            <label for="representante">Nome do representante legal da empresa</label>
                            <input type="text" name="representante" id="representante" required>
                        </div>

                        <div class="for-medio">
                            <label for="Cargo">Cargo do representante legal da empresa</label>
                            <input type="text" name="Cargo" id="Cargo" required>
                        </div>
                    </div>

                    <div class="caixa-per">
                        <div class="for-medio">
                            <label for="início">Data de início do convénio</label>
                            <input type="date" name="início" id="início" required>
                        </div>
                        <div class="for-medio">
                            <label for="término">Data de término do convénio</label>
                            <input type="date" name="término" id="término" required>
                        </div>
                    </div>

                    <div class="caixa-per">
                        <div class="for-medios">
                            <label class="cursos" for="Cursos">Cursos permitidos para estágio</label>
                            <select name="Cursos" id="Cursos" required>
                                <option value="">Selecione!</option>

                                <option value="Agroindústria">Agroindústria </option>

                                <option value="Agropecuária">Agropecuária</option>

                                <option value="Agricultura">Agricultura</option>

                                <option value="Informática p/ Internet"> Informática p/ Internet </option>

                                <option value="Zootecnia">Zootecnia</option>

                            </select>


                        </div>

                        <div class="for-medio">
                            <label for="Carga">Carga horária diária máxima
                                disponibilizada<br> para  cada estudante</label>
                            <input type="text" name="Carga" id="Carga" required>
                        </div>
                    </div>
                    <div class="botões">
                        <button class="botão-envio" type="submit">Cadastra</button>
                    </div>
            </div>
            </form>
        </div>
        </div>

    </main>
</body>

</html>