<?= $this->load->view('head');//Chama a view head.html?>

<title>Ajuda</title>

</head>
<body>
  <div class="container main">
  <?php /* Chama a View da Barra de navegação*/
  $dados['ativo'] = 5; $this->load->view('navbar',$dados);?>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
      
      <?php echo form_fieldset('Perguntas Frequentes')?>

      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         O que é o iLAB?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
É um sistema altamente moderno, desenvolvido com muito carinho e amor pelo Escritório Escola, com o objetivo de dinamizar as reservas dos laboratórios da instituição e disponibilizar para os alunos alguma coisa importante aqui.      </div>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Como funciona?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
É simples, rápido e prático. O sistema do iLAB foi desenvolvido para ser intuitivo. Para mais informações consulte o guia do usuário. Em caso de outras dúvidas e dificuldades não hesite em entrar em contato conosco. Será sempre um prazer ajuda-lo.      </div>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Quem pode realizar login?
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
Apenas professores, coordenadores e técnicos dos laboratórios da instituição. Para realizar login será necessário uma conta já cadastrada.

      </div>
    </div>
  </div>

<div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
Em que mais posso ajuda-lo?

        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
Sou um parágrafo. Clique aqui para editar-me e adicionar o seu próprio texto. É fácil! Basta clicar em "Editar Texto" ou clicar duas vezes sobre mim e você poderá adicionar o seu próprio conteúdo e trocar fontes. Sinta-se à vontade para arrastar-me e soltar em qualquer lugar em sua página. Sou um ótimo lugar para você contar sua história e permitir que seus clientes saibam um pouco mais sobre você.      </div>
    </div>
  </div>

</div>          
  </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6">
  </div>
 
</div>  	


<?= $this->load->view('footer');//Chama a view footer?>