<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Checkout Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">
		<!--<link rel="stylesheet" href="css/bootstrap.css">-->
		<link rel="stylesheet" href="css/bootstrap-flatly.css">
		<style>
		.navbar{
			margin:0;
		}
		.navbar .glyphicon{
			color:lightgreen;
		}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><img src="img/logo-rodape.png" alt="Mirror Fashion"></a>
				<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
					<span class="glyphicon glyphicon-align-justify"></span>
				</button>
			</div>
			<ul class="nav navbar-nav collapse navbar-collapse">
				<li><a href="sobre.php"><span class="glyphicon glyphicon-home"></span> Sobre</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Ajuda</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Perguntas frequentes</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Entre em contato</a></li>

			</ul>
		</nav>
		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>Obrigado por comprar na Mirror Fashion!
					Preencha seus dados para efetivar a compra.
				</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>Sua compra</h2>
						</div>
						<div class="panel-body">
							<img src="img/produtos/foto2-<?=$_POST['cor']?>.png" class="img-thumbnail img-responsive hidden-xs">
							<dl>
								<dt>Produto</dt>
								<dd><?= $_POST['nome'] ?></dd>
				
								<dt>Preço</dt>
								<dd id="preco"><?= $_POST['preco'] ?></dd>
				
								<dt>Cor</dt>
								<dd><?= $_POST['cor'] ?></dd>
				
								<dt>Tamanho</dt>
								<dd><?= $_POST['tamanho'] ?></dd>
							</dl>
							<div class="form-group">
								<label for="qt">Quantidade</label>
								<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
							</div>
							<div class="form-group"> 
								<label for="total">Total</label>
								<output for="qt valor" id="total" class="form-control">
									<?= $_POST["preco"] ?>
								</output>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<form class="col-sm-8 col-lg-9" action="index.php">
						<div class="row">
							<fieldset class="col-md-6">
								<legend>Dados pessoais</legend>
								<div class="form-group">
									<label for="nome">Nome Completo</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										<input type="text" class="form-control" id="nome" name="nome" autofocus>
									</div>
								</div>
		
								<div class="form-group">
									<label for="email">E-mail</label>
									<div class="input-group">
										<span class="input-group-addon">@</span>
										<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
									</div>
								</div>
		
								<div class="form-group">
									<label for="cpf">CPF</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
										<input type="cpf" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99">
									</div>
								</div>
	
								<div class="checkbox">
									<label>
										<input type="checkbox" value="sim" name="spam" checked>
										Quero receber Spam da Mirror Fashion
									</label>
								</div>
							</fieldset>
							<fieldset class="col-md-6">
								<legend>Cartão de credito</legend>
		
								<div class="form-group">
									<label for="numero-cartao">Número - CVV</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
										<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
									</div>
								</div>
	
								<div class="form-group">
									<label for="bandeira-cartao">Bandeira</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
										<select name="bandeira-cartao" id="bandeira-cartao" id="bandeira-cartao" class="form-control">
											<option value="master">MasterCard</option>
											<option value="visa">Visa</option>
											<option value="amex">American Express</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="validade-cartao">Validade</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
										<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
									</div>
								</div>
		
							</fieldset>
						</div>
						<button type="submit" class="btn btn-primary btn-lg pull-right">
							<span class="glyphicon glyphicon-thumbs-up"></span>
							Confirmar Pedido
						</button>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>

	<script src="js/inputmask-plugin.js"></script>

	<script src="js/converteMoeda.js"></script>
	<script src="js/testaConversao.js"></script>
	<script src="js/total.js"></script>
</html>
