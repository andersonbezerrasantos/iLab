<?= $this->load->view('head');//Chama a view head.html?>

  <title>Reserva de Laboratórios</title>
  
</head>
<body>
  <div class="container main">
  <?php /* Chama a View da Barra de navegação*/
  $dados['ativo'] = 3; $this->load->view('navbar',$dados);?>
  <div class="row">
  <div class="col-sm-12">    
    <?php 
    echo form_open('cadastroreserva/receber','class="form-horizontal"'); 
    echo form_fieldset('Reserva de Laboratorio');

    //Definição para o Bootstrap
    $attlabel = array('class' => 'col-sm-2 control-label',);
    $formgroup = '<div class="form-group">';
    $taminput = '<div class="col-sm-10">';
    $clss = 'class="form-control"';
    $fimdiv = '</div></div>';

    //Campo de Nome
    echo $formgroup;    
    $att = array(
      "type" => "text",
      "name" => "nome",
      "id" => "disabledTextInput",
      "value" => $this->session->userdata('nome'),
      "class" => "form-control",
      "disabled" => ""             
    );
    echo form_label('NOME','disabledTextInput',$attlabel);
    echo $taminput;
    echo form_input($att);
    echo $fimdiv;

    //Campo de Unidade
    echo $formgroup;
    $options = array('' => '',); 
    foreach($unidade as $unidade) {
      $options += array($unidade['unidadeid'] => $unidade['unidadedesc'],);    
    }
    echo form_label('UNIDADE','unidade',$attlabel);
    echo $taminput;
    echo form_dropdown('unidade',$options,'',$clss);
    echo $fimdiv;

    //Campo de Curso
    echo $formgroup;
    $options = array('' => '',); 
    foreach($curso as $curso) {
      $options += array($curso['cursoid'] => $curso['cursodesc'],);    
    }
    echo form_label('CURSO','curso',$attlabel);
    echo $taminput; 
    echo form_dropdown('curso',$options,'',$clss);
    echo $fimdiv;

    //Campo das Disciplinas
    echo $formgroup;
    $options = array('' => '',);   
    foreach($disciplina as $disciplina) {
      $options += array($disciplina['disciplinaid'] => $disciplina['disciplinadesc'],);    
    }
    echo form_label('DISCIPLINA','disciplina',$attlabel);
    echo $taminput;
    echo form_dropdown('disciplina',$options,'',$clss);
    echo $fimdiv;

    //Campo dos Periodos
    echo $formgroup;
    $options = array('' => '',);
    foreach($periodo as $periodo) {
      $options += array($periodo['periodoid'] => $periodo['periododesc'],);    
    }
    echo form_label('PERIODO','periodo',$attlabel);
    echo $taminput;
    echo form_dropdown('periodo',$options,'',$clss);
    echo $fimdiv;

    //Campo de Data
    echo $formgroup;
    $atr_dataaula = array(
      "type" => "date",
      "name" => "dataaula",
      "id" => "dataaula",
      "value" => set_value('dataaula'),
      "class" => "form-control",
      "placeholder" => "Digite a data da Aula"
    ); 
    echo form_label('DATA','dataaula',$attlabel);
    echo $taminput;    
    echo form_input($atr_dataaula);
    echo $fimdiv;

    //Campo de Turno
    echo $formgroup;    
    $options = array('' => '',);
    foreach($turno as $turno) {
      $options += array($turno['turnoid']  => $turno['turnodesc'],);    
    }
    echo form_label('TURNO', 'turno',$attlabel);
    echo $taminput; 
    echo form_dropdown('turno', $options,'',$clss);
    echo $fimdiv;

    //Campo dos Labs
    echo $formgroup;
    $options = array('' => '',);
    foreach($lab as $lab) {
      $options += array($lab['labid']  => $lab['labnome'],);    
    }
    echo form_label('LABORATÓRIO','laboratorio',$attlabel);
    echo $taminput;
    echo form_dropdown('laboratorio',$options,'',$clss);
    echo $fimdiv;

    //Campo Descrição
    echo $formgroup;
    $atr_text = array(              
      "name" => "descricao",
      "id" => "descricao",
      "value" => set_value('descricao'),
      "class" => "form-control",                  
      "rows" => "5",                  
    );                 
    echo form_label('DESCRIÇÃO','descricao',$attlabel);
    echo $taminput;
    echo form_textarea($atr_text);
    echo $fimdiv;

    echo '<div class="form-group">';
    echo '<div class="col-sm-offset-2 col-sm-6">';
    echo validation_errors();
    echo $fimdiv;

    $atributosbtn = array(
        "type" => "submit",
        "name" => "btnSubmit",
        "value" => "Cadastrar",
        "class" => "btn btn-info btn-lg col-xs-6 col-xs-offset-3 col-md-2 col-md-offset-2"
      );
    echo form_input($atributosbtn);

    echo form_fieldset_close();
    echo form_close();
   ?>    
  </div>
  </div>
</div>
<?= $this->load->view('footer');//Chama a view footer?>