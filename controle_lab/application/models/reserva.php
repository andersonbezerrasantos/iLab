<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reserva extends CI_Model {

  /**
   * @todo CADASTRO DE USUÁRIO
   * Esta Função salva as informações na tabela
   */
  function cadastro($dados){    	
    return $this->db->insert('tblreserva', $dados);
  }

  /**
   * @todo Arruma no vetor
   * Esta Função organiza o retorno num vetor
   * para que as informações sejam melhor manipuladas na view
   */
  function arruma($retono){
    $rows = array(); //esta variavel manterá todos os resultados
    foreach($retono->result_array() as $row){    
      $rows[] = $row; //adicionar o resultado buscado para o vetor rows;
    }
   return $rows; // retorna rows, e nao a variavel row
  }

  /**
   * @todo Lista de labs reservados
   * Esta Função mostra uma tabela com as reservas
   * de laboratorios por usuario
   */
  public function list_reserva($idusuario){  
    $this->db->select('
      tbllaboratorio.labnome,  
      tbldisciplina.disciplinadesc, 
      tblturno.turnodesc, 
      tblreserva.data_aula,              
      tblreserva.reservaid,              
      tblusuario.nome,              
      tblreserva.descricao,              
      tblunidade.unidadedesc,              
      tblcurso.cursodesc,              
      tblreserva.cursoid,              
      tblperiodo.periododesc              
      ');
    $this->db->from('tblreserva');          
    $this->db->join('tblusuario','tblreserva.usuarioid = tblusuario.usuarioid','inner');
    $this->db->join('tbllaboratorio','tblreserva.labid = tbllaboratorio.labid','inner');
    $this->db->join('tblunidade','tblreserva.unidadeid = tblunidade.unidadeid','inner');
    $this->db->join('tblturno','tblreserva.turnoid = tblturno.turnoid','inner');
    $this->db->join('tblperiodo','tblreserva.periodoid = tblperiodo.periodoid','inner');
    $this->db->join('tblcurso','tblreserva.cursoid = tblcurso.cursoid','inner');
    $this->db->join('tbldisciplina','tblreserva.disciplinaid = tbldisciplina.disciplinaid','inner');
    $this->db->where('tblreserva.usuarioid =', $idusuario);
    $retono = $this->db->get();
    return $this->arruma($retono);  
  }

  public function reserva_dia($data){  
    $this->db->select('
      tbllaboratorio.labnome,  
      tbldisciplina.disciplinadesc, 
      tblturno.turnodesc, 
      tblreserva.data_aula,              
      tblreserva.reservaid,              
      tblusuario.nome,              
      tblreserva.descricao,              
      tblunidade.unidadedesc,              
      tblcurso.cursodesc,              
      tblreserva.cursoid,              
      tblperiodo.periododesc              
      ');
    $this->db->from('tblreserva');          
    $this->db->join('tblusuario','tblreserva.usuarioid = tblusuario.usuarioid','inner');
    $this->db->join('tbllaboratorio','tblreserva.labid = tbllaboratorio.labid','inner');
    $this->db->join('tblunidade','tblreserva.unidadeid = tblunidade.unidadeid','inner');
    $this->db->join('tblturno','tblreserva.turnoid = tblturno.turnoid','inner');
    $this->db->join('tblperiodo','tblreserva.periodoid = tblperiodo.periodoid','inner');
    $this->db->join('tblcurso','tblreserva.cursoid = tblcurso.cursoid','inner');
    $this->db->join('tbldisciplina','tblreserva.disciplinaid = tbldisciplina.disciplinaid','inner');
    $this->db->where('tblreserva.data_aula =', $data);
    $retono = $this->db->get();
    return $this->arruma($retono);  
  }

  /**
   * @todo Pega info de tabela
   * Esta Função pega os dados de uma tabela
   */
  function gettabela($tabela){    
    $retono = $this->db->get($tabela);
    return $this->arruma($retono);
  }

  /**
   * @todo apaga reserva
   * Esta Função apaga os dados de uma tabela
   */
  function apaga($id){    
    $this->db->where('reservaid', $id);
    return $this->db->delete('tblreserva');     
  }
}