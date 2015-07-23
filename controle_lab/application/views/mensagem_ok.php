<?= $this->load->view('head');//Chama a view head.html?>

	<title>Sistema Gerenciador de Laboratórios</title>
	
	<script type="text/javascript">
	/* Este codigo javascript redireciona a pagina para a home do site apos 3 segundos*/
	setTimeout(function(){
	  window.location.href = "<?php echo base_url('cadastroreserva')?>";
	},3000)
	</script>
</head>
<body>
<div class="container main">
<?php /* Chama a View da Barra de navegação*/
$dados['ativo'] = 0; $this->load->view('navbar',$dados);?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<h1 class="text-center"><i class="fa fa-check fa-lg pull-left"> Cadastro Realizado!!</i></h1>			
		</div>
	</div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>