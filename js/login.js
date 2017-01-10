function logeo() {
  var usu=$('#usuario').val();
  var pass=$('#pass').val();
  var zonausu=$('#perfil').val();
  if(usu==''){
    $('#contenidoWarning').text('Ingrese Usuario');
    $("#alertWarning").modal('show');
  }else if (pass=='') {
    $('#contenidoWarning').text('Ingrese Contraseña');
    $("#alertWarning").modal('show');
  }else if (zonausu=='nada') {
    $('#contenidoWarning').text('Seleccione tipo de usuario');
    $("#alertWarning").modal('show');
  }else{
    var options={
      type : 'post',
      url : 'index.php?page=login&accion=login',
      data : {
        'usu' : usu,
        'pass' : pass,
        'zonausu' : zonausu
      },
    };
    $.ajax(options)
    .done(function (data) {
      if(data==1){
        $('#contenidoError').text('ERROR!! Usuario no existe');
        $("#alertError").modal('show');
      }else if (data==2) {
        $('#contenidoWarning').text('Usuario Desabilitado');
        $("#alertWarning").modal('show');
      }else if (data==3) {
        $('#contenidoWarning').text('Zona Incorrecta');
        $("#alertWarning").modal('show');
      }else {
        window.location="index.php";
      }
    });
  }
}
