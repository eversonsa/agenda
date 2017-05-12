<html>
	<head>
		<title>Agenda</title>
                <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
                <link rel="stylesheet" href="assets/css/template.css" />
	</head>
	<body>
	    <div class="container centralizar">
               <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="home">Home</a></li>
                <li role="presentation"><a href="livro">Cadastrar Livro</a></li>
                <li role="presentation"><a href="pessoa">Cadastrar Pessoa</a></li>
                <li role="presentation"><a href="cadastrarEmprestimo">Cadastrar Emprestimo</a></li>
                <li role="presentation"><a href="relatorio">Relatorio</a></li>
               </ul>
            </div> 
            <hr>
            <div class="posicionamento">
                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
            
		<div class="rodape"></div>
	</body>
</html>