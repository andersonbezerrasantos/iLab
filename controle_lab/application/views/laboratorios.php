<?= $this->load->view('head');//Chama a view head.html?>

<title>Laboratórios</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" >
  <style>  
  .pdf {height:800px; width:100%;}
  </style>
</head>
<body>
  <div class="container main">
  <?php /* Chama a View da Barra de navegação*/
  $dados['ativo'] = 2; $this->load->view('navbar',$dados);?>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
     <?php 
     echo '<h4>Esses são os Laboratórios da Faculdade Pitagoras:</h4>';
     
     foreach ($lab as $lab) { 
    echo '<div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$lab['labid'].'">
                  '.$lab['labnome'].'<span id="meubtn"><i class="pull-right fa fa-chevron-down fa-fw fa-lg"></i></span></a>
                </h4>
              </div>
              <div id="collapse'.$lab['labid'].'" class="panel-collapse collapse">
                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.</div>
              </div>
            </div>  
          </div>';
     }


      ?>
  </div>
  </div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>