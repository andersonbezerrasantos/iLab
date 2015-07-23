<?= $this->load->view('head');//Chama a view head.html?>

	<title>Sistema Gerenciador de Laboratórios</title>

</head>
<body>
<div class="container main">
	<?php /* Chama a View da Barra de navegação*/
	$dados['ativo'] = 1; $this->load->view('navbar',$dados);?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="panel panel-info">
			<div class="panel-heading">
				<h3>Minhas Aulas Reservadas</h3>
        <p>Aqui aparece as aulas que você reservou nos laboratorios</p>
			</div>
		<div class="panel-body">
    <?php if( $reservado){ 
    echo '<div class="table-responsive">
		<table class="table table-hover">
      <tr class="active">
        <th>LABORATORIO</th>
        <th>DISCIPLINA</th> 
        <th>TURNO</th>
        <th>DIA</th> 
        <th></th>
              
      </tr>';        
      foreach($reservado as $reserva) {
        echo "<tr>";
        echo '<td>'.$reserva['labnome'].'</td>';
        echo '<td>'.$reserva['disciplinadesc'].'</td>';
        echo '<td>'.$reserva['turnodesc'].'</td>';
        echo '<td>'.strftime('%d %b %Y', strtotime($reserva['data_aula'])).'</td>';
        echo '<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exibe'.$reserva['reservaid'].'">Visualizar</button>
              <!-- Modal -->
              <div class="modal fade" id="exibe'.$reserva['reservaid'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel"> Reserva de Laboratório <br><small>Prof: '.$reserva['nome'].'</small></h4>
                    </div>
                    <div class="modal-body">
                    <dl class="dl-horizontal">
                      <dt>Curso:</dt>
                      <dd>'.$reserva['cursodesc'].'</dd>
                      <dt>Disciplina:</dt>
                      <dd>'.$reserva['disciplinadesc'].'</dd>
                      <dt>Periodo:</dt>
                      <dd>'.$reserva['periododesc'].'</dd>
                      <dt>Turno:</dt>
                      <dd>'.$reserva['turnodesc'].'</dd>
                      <dt>Unidade:</dt>
                      <dd>'.$reserva['unidadedesc'].'</dd>
                      <dt>Laboratório:</dt>
                      <dd>'.$reserva['labnome'].'</dd>
                      <dt>Data da Aula:</dt>
                      <dd>'.strftime('%a, %d de %B de %Y', strtotime($reserva['data_aula'])).'</dd>
                      <dt>Descrição:</dt>
                      <dd>'.$reserva['descricao'].'</dd>
                    </dl> 
                    </div>
                    <div class="modal-footer">';
                      $atts = array(
                        'title' => 'Excluir Reserva',
                        'class' => 'pull-left btn btn-danger'
                      );
                      echo anchor('paineladm/apaga/'.$reserva['reservaid'], 'Excluir Reserva', $atts);
                      echo '<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>
              </td>';             
      }
    echo "</table>";
    }else{
        echo "<center><h4><span class='label label-danger'>Nenhum Reserva foi feita ainda!</span></h4></center>"; 
        }?>
  </div>
			</div>
			</div>
		</div>
	</div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>