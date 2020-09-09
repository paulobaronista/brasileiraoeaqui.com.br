<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Brasileirão 2020/2021';
        $data['description'] = 'Venha para o Brasileirão 2020';
        $data['keywords'] = 'brasil futebol 2020, futebol brasileiro 2020, Midia futebol 2020, imprensa brasileira 2020';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $empresa = $this->input->post('empresa');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.brasileiraoeaqui.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@brasileiraoeaqui.com.br","Brasileirão 2020/2021");
            $this->email->to('contato@brasileiraoeaqui.com.br');
            $this->email->cc('paulobaronista@gmail.com, adsales.brasil@turner.com, renata@spicycomm.com.br, brasileiraoeaqui2020@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome: {$nome}<br/>
                E-mail: {$email}<br/>
                    Telefone/Celular: {$telefone}<br/>
                        Agência/Empresa: {$empresa}<br/>
                            Mensagem: {$mensagem}<br/>
                                </body></html>");

            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }

        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'Brasileirão 2020/2021';
        $data['description'] = 'Venha para o Brasileirão 2020';
        $data['keywords'] = 'brasil futebol 2020, futebol brasileiro 2020, Midia futebol 2020, imprensa brasileira 2020';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'Brasileirão 2020/2021';
        $data['description'] = 'Venha para o Brasileirão 2020';
        $data['keywords'] = 'brasil futebol 2020, futebol brasileiro 2020, Midia futebol 2020, imprensa brasileira 2020';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */
