<html>
	<head>
		<title>Site Institucional</title>
		<link rel="stylesheet"  />
	</head>
	<body>
            <div class="topo">
                <u class="menu">
                    <a href="#"><li>Home</li></a>
                    <a href="contato.php"><li>Contato</li></a>
                    <a href="pessoa.php"><li>Pessoa</li></a>
                </u>
            </div>
            
		<div class="container">
                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
            
		<div class="rodape"></div>
	</body>
</html>