<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/records.css">
    <link rel="stylesheet" href="css/modal.css">
    <script src="main.js" defer></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>CRUD</title>
</head>

<body>
    <header>
        <h1 class="header-title">Cadastro de Clientes</h1>
    </header>
    
    <main>
        <button type="button" class="button blue mobile" id="cadastrarCliente">Cadastrar Cliente</button>
        <table id="tableClient" class="records">
            <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>CEP</th>
                        <th>Região</th>
                        <th>UF</th>
                        <th>Múnicipio</th>
                        <th>Nacionalidade</th>
                        <th>Data de Nascimento</th>
                        <th>Ação</th>
                    </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div class="modal" id="modal">
            <div class="modal-content">
                <header class="modal-header">
                    <h2>Novo Cliente</h2>
                    <span class="modal-close" id="modalClose">&#10006;</span>
                </header>
                <form id="form" class="modal-form">
                    <input type="text" id="nome" data-index="new" class="modal-field" placeholder="Nome do Cliente" required>
                    <input type="text" id="rua" class="modal-field" placeholder="Rua" required>
                    <input type="text" id="numero" class="modal-field" placeholder="Número" required>
                    <input type="text" id="cep" class="modal-field" placeholder="CEP" required>
                    <input type="text" id="regiao" class="modal-field" placeholder="Região" required>
                     <!-- estado -->
                    <select id="estados" class="modal-field " required>
		             	<option value="" selected></option>
		            </select>
                     <!-- cidade -->
	             	<select id="cidades" class="modal-field" required>
                        <option value=""></option>
		            </select>
                    <input type="text" id="nacionalidade" class="modal-field" placeholder="Nacionalidade" required>
                   
                    <input type="date" id="data" class="modal-field" placeholder="Data de Nascimento" required>
                </form>
                <footer class="modal-footer">
                    <button id="salvar" class="button green">Salvar</button>
                    <button id="cancelar" class="button blue">Cancelar</button>
                </footer>
            </div>
        </div>
    </main>
    <footer>
        Copyright &copy; Alessandro Silva
    </footer>
</body>

</html>