<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastroreserva extends CI_Controller {
    /**
     * Cadastro Evento
     *
     * @package     CodeIgniter
     * @subpackage  Controllers
     * @category    reserva de laboratorios
     * @author      Escritório Escola Dev Team
     * @link        http://www.semanatrans.esy.es
     * 
     * Este Controller foi projetado para ser a Area de reserva de laboratorios!
     */
    
    public function __construct(){
        parent::__construct();
        /* Esta condição verifica se algum
         * Usuario está logado
         * Caso não esteja logado é carregada a view de login
         */
        if(!$this->session->userdata('logado')){            
            redirect(base_url());            
        }        
    }   

    public function index() {

        $this->load->model('reserva');
        $dados['curso'] = $this->reserva->gettabela('tblcurso');
        $dados['disciplina'] = $this->reserva->gettabela('tbldisciplina');
        $dados['turno'] = $this->reserva->gettabela('tblturno');
        $dados['unidade'] = $this->reserva->gettabela('tblunidade');
        $dados['periodo'] = $this->reserva->gettabela('tblperiodo');
        $dados['lab'] = $this->reserva->gettabela('tbllaboratorio');
        $this->load->view('cadastro_reserva',$dados);
        
    }  
    public function receber(){
        //Regras da Validação
        $this->load->library('form_validation');
        $this->form_validation->set_rules('unidade', 'UNIDADE', 'required');
        $this->form_validation->set_rules('curso', 'CURSO', 'required'); 
        $this->form_validation->set_rules('disciplina', 'DISCIPLINA', 'required'); 
        $this->form_validation->set_rules('periodo', 'PERIODO', 'required');
        $this->form_validation->set_rules('dataaula', 'DATA', 'required');       
        $this->form_validation->set_rules('turno', 'TURNO', 'required');      
        $this->form_validation->set_rules('laboratorio', 'LABORATÓRIO', 'required');      
        $this->form_validation->set_rules('descricao', 'DESCRICAO', 'required');
        
        $this->form_validation->set_error_delimiters(
            '<div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button><i class="fa fa-exclamation-triangle fa-fw fa-lg"></i> ', 
            '</div>');     
        
        if ($this->form_validation->run() == FALSE) {
            //se não houver cpf ou senha retornara com msg de erro
            $this->index();            
        } else { 
            //Recebe os dados da views
            $data['usuarioid'] = $this->session->userdata('id');
            $data['unidadeid'] = $this->input->post('unidade');
            $data['cursoid'] = $this->input->post('curso');
            $data['disciplinaid'] = $this->input->post('disciplina');
            $data['data_aula'] = $this->input->post('dataaula');
            $data['turnoid'] = $this->input->post('turno');
            $data['periodoid'] = $this->input->post('periodo');
            $data['labid'] = $this->input->post('laboratorio');
            $data['descricao'] = $this->input->post('descricao');
           
            /* Carrega o modelo */
            $this->load->model('reserva');            

            /* Chama a função inserir do modelo */
            if ($this->reserva->cadastro($data)) {
                $this->load->view('mensagem_ok');
            } else {
                echo "error";
            }
        }       
    }
}