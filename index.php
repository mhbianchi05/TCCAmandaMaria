<!DOCTYPE html>
<html>

<body>

    <head>
        <title>Cadastro de Clientes</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript>
            <link rel="stylesheet" href="assets/css/noscript.css" />
        </noscript>
    </head>


    <!-- Form -->
    <section>
        <header style="text-align: center; margin-top: 10px;">
            <h2>Cadastro de Clientes</h2>
        </header>

        <section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">

            <div class="content">

                <form method="post" action="#">
                    <div class="fields" style="width: 500px;">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" id="nome" value="" />
                    </div>
                    <div class="fields" style="width: 500px;">
                        <label for="name">CPF</label>
                        <input type="text" name="cpf" id="cpf" value="" />
                    </div>
                    <div class="fields" style="width: 500px;">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" value="" />
                    </div>
                    <div class="fields" style="width: 500px;">
                        <label for="email">Data de Nascimento</label>
                        <input type="email" name="dtaNasc" id="dtaNasc" value="" />
                    </div>
                    <div class="fields" style="width: 500px;">
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo">
                            <option value="">- Selecione -</option>
                            <option value="1">Feminino</option>
                            <option value="2">Masculino</option>
                        </select>
                    </div>

            </div>
            <div class="image" style="margin-right: 100px; height: 150px">
                <img src="images/teste.jpg" alt="" />
            </div>
        </section>

        <div>
            <a style="margin-left: 70px;"><input type="submit" name="submit" id="submit" value="Cadastrar" /></a>
            <a style="margin-left: 30px;"><input type="submit" name="submit" id="submit" value="Limpar" /></a>
            <a style="margin-left: 30px;"><input type="submit" name="submit" id="submit" value="Cancelar" /></a>
        </div>
        </form>

    </section>


</body>

</html>