<?php

session_start();
/*
 * Script para validar el inicio de sesion
 *
 */
require 'model/usuario.php';
require_once 'class.inputfilter.php';

//include 'controller/validar-sesion.php';

function _formAction(){
    require 'login.php';
}

function _loginAction() {
  $filter = new InputFilter();
  $usu = $filter->process($_POST["usu"]);
  $pass = $filter->process($_POST["pass"]);
  $zonausu=$filter->process($_POST['zonausu']);
  $us=$usu;
  $oUsuario= new Usuario();
  $val=$oUsuario->validaExisteUsu($usu,$pass,$zonausu);
  echo $val;
}

function _cerrarAction() {
    if (isset($_SESSION['usuario'])) {

        unset($_SESSION['usuario']); // Elimina usuario
        unset($_SESSION['idperfil_hosp']); // Elimina idusuario
        unset($_SESSION['modusuario']); // Elimina modo

        header("location: index.php?page=login&accion=form");
        die;
    }
}

?>
