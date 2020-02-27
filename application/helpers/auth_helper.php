<?php 

function checkAuthAdmin() {
	$ci = get_instance();
    $usuarioLogado = $ci->session->userdata("usuario_logado");
    if(empty($usuarioLogado["id"])) {
        $ci->session->set_flashdata("danger", "Você precisa estar logado");
        redirect("/admin/login");
    }
    return $usuarioLogado;
}

function checkAuthUser() {
	$ci = get_instance();
    $usuarioLogado = $ci->session->userdata("user_auth");
    
    if(empty($usuarioLogado["tipologin"]))
        redirect("/login");
    if(empty($usuarioLogado["id"]) || $usuarioLogado["tipologin"] == "cliente") {
        $ci->session->set_flashdata("danger", "Você precisa estar logado");
        redirect("/login");
    }
    return $usuarioLogado;
}

function checkAuthEmpresa() {
	$ci = get_instance();
    $usuarioLogado = $ci->session->userdata("user_auth");
    
    if(empty($usuarioLogado["tipologin"]))
        redirect("/login");
    if(empty($usuarioLogado["id"]) || $usuarioLogado["tipologin"] == "empresa") {
        $ci->session->set_flashdata("danger", "Você precisa estar logado");
        redirect("/login");
    }
    return $usuarioLogado;
}	