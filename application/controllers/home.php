<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Brasileirão 2020/2021';
        $data['description'] = 'Venha para o Brasileirão 2020';
        $data['keywords'] = 'brasil futebol 2020, futebol brasileiro 2020, Midia futebol 2020, imprensa brasileira 2020';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade(){
        $data['title'] = 'Brasileirão 2020/2021';
        $data['description'] = 'Venha para o Brasileirão 2020';
        $data['keywords'] = 'brasil futebol 2020, futebol brasileiro 2020, Midia futebol 2020, imprensa brasileira 2020';
        $menu['politicadeprivacidade'] = 'active';
		$conteudo['pagina_view'] = 'politicadeprivacidade_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
    }
    public function politicadecookies(){
        $data['title'] = 'Brasileirão 2020/2021';
        $data['description'] = 'Venha para o Brasileirão 2020';
        $data['keywords'] = 'brasil futebol 2020, futebol brasileiro 2020, Midia futebol 2020, imprensa brasileira 2020';
        $menu['politicadecookies'] = 'active';
		$conteudo['pagina_view'] = 'politicadecookies_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}

}

/* Location: ./application/controllers/home.php */
