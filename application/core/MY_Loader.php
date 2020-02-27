<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
    
    public function template($nome, $dados = array()) {
        $this->view("template/cabecalho.php", $dados);
        $this->view($nome);
        $this->view("template/rodape.php");
    }

    public function templateAdmin($nome, $dados = array()) {
        $dados['usuarioLogado'] = checkAuthAdmin();
        $this->view("template/cabecalho.php", $dados);
        $this->view("template/sidebar.php");
        $this->view($nome);
        $this->view("template/rodape.php");
    }

    public function templateUser($nome, $dados = array()) {
        $dados['usuarioLogado'] = checkAuthUser();
        $this->view("template/cabecalho.php", $dados);
        $this->view($nome);
        $this->view("template/rodape.php");
    }    

    public function templateEmpresa($nome, $dados = array()) {
        $dados['usuarioLogado'] = checkAuthEmpresa();
        $this->view("template/cabecalho.php", $dados);
        $this->view($nome);
        $this->view("template/rodape.php");
    }
}