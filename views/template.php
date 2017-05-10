<html>
	<head>
		<title>Agenda</title>
                <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
                <link rel="stylesheet" href="assets/css/template.css" />
	</head>
	<body>
                   
		<div class="container">
                    <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="home.php">Home</a></li>
                <li role="presentation"><a href="livro.php">Adicionar Livro</a></li>
                <li role="presentation"><a href="pessoa.php">Adicionar Pessoa</a></li>
            </ul>
            </div> 
                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
            
		<div class="rodape"></div>
	</body>
</html>