<?php

require_once 'cado.php';

class Usuario {

  private $objPdo;

  public function __construct() {
      $this->objPdo = new cado();
  }

  public function validaExisteUsu($usu,$pass,$zonausu){
    $return==0; //4:todo ok; 1: usu no Existe; 2: usuario desabilitado; 3=zona incorrecta
    $contra=md5($pass);
    $conexion = new cado();
  	$conexion->conectar();
  	$consulta="SELECT estado,zona FROM sisesterilizacion.usuario WHERE dni='".$usu."' and pass='".$contra."' ";
  	$rs=pg_query($consulta);
    if(pg_num_rows($rs)==0){
  		$return=1;
  	}else{
  		if($row=pg_fetch_array($rs)){
  			$esta=$row["estado"];
  			$zon=$row["zona"];
  			if($esta=='A'){
  				$consulta2="SELECT id_zona FROM sisesterilizacion.zona WHERE nombre_zona='".$zonausu."'";
  				$rs1=pg_query($consulta2);
  				if ($row1=pg_fetch_array($rs1)) {
  					$zo=$row1["id_zona"];
  					if($zon==$zo){
  						$consulta3="SELECT emp_id,emp_nombres,emp_appaterno,emp_apmaterno FROM empleados WHERE emp_dni='".$usu."'";
  						$rs2=pg_query($consulta3);
  						if($row3=pg_fetch_array($rs2)){
  							$idusu=$row3["emp_id"];
  							$nomcompleto=$row3["emp_nombres"];
  							$_SESSION["nomusuario"]=$nomcompleto;
  							$_SESSION["zona"]=$zonausu;
  							$_SESSION["navegacion"]="Inicio";
  							$_SESSION["dniusuario"]=$us;
  							$_SESSION["idusuario"]=$idusu;
                $return=4;
  						}
  					}else{
  						$return=3;
  					}
  				}
  			}else{
  				$return=2;
  			}
  		}
  	}
    return $return;
  }


    public function validarID($user, $pass){
      $stmt=$this->objPdo->prepare('SELECT * FROM sishosp.usuario_hosp u inner join sishosp.perfil_hosp ph on u.id_perfil=ph.idperfil WHERE u.estado = 1 and u.usu_hosp = :user and u.password_hosp = :pass ;');
      $stmt->execute(array('user' => $user,
                          'pass' => $pass));
      $usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $usuarios;
    }


    public function listadousuarios(){
        $sql = " SELECT * from sishosp.usuario_hosp uh inner join empleados e on uh.id_emp = e.emp_id
                    inner join sishosp.perfil_hosp ph on uh.id_perfil = ph.idperfil";
        $stmt=$this->objPdo->prepare($sql);
        $stmt->execute();
        $usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $usuarios;
    }
}

?>
