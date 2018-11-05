$('#btn_guardar').click(function () {
	//comprobando q las imagenes existen y que los campos de texto no esten vacios
	var verificador = $('#txt_nombre_registro').val()!="" && $('#txt_pass_registro').val()!="" && $('#txt_pass_registro_2').val()!="" && $('#txt_correo_registro').val()!="" && $('#txt_telefono_registro').val()!="";
	var verificador_c = $('#txt_pass_registro').val()==$('#txt_pass_registro_2').val()
	if (verificador) {
		if (verificador_c) {
			var formData = new FormData(document.getElementById("formulario_registro"));
			//formData.append("dato", "valor");
			$.ajax({
			    url: "php_ajax/registrar_usuario.php",
			    type: "post",
			    dataType: "html",
			    data: formData,
			    cache: false,
			    contentType: false,
			    processData: false
			})
			    .done(function(res){
			    	console.log(res);
			    	//alertify.success(res);
			     	if(res==1){
			     		$('#ventanaRegistro').modal('hide');
			     		alertify.success("Usuario ingresado exitosamente.");			     		
					 }else{
					 	alertify.error("No se pudo ingresar el usuario, posiblemente ya existe un usuario con ese nombre o correo." + res);
					 }		        
			    })
			    .fail(function() {
		            alertify.error("No se pudo ingresar el usuario.");
		        });
		} else {
			document.getElementById("alerta_registro").innerHTML=`
					<div class="col-10 mx-auto alert alert-danger" role="alert">
                        <strong>Error!</strong> Las contraseñas no son iguales.
                    </div>
			`;
		}
		
	} else {
		document.getElementById("alerta_registro").innerHTML=`
					<div class="col-10 mx-auto alert alert-danger" role="alert">
                        <strong>Error!</strong> Debe llenar todos los campos del formulario.
                    </div>
		`;			
	}
});

//para estilo de comprobador de contraseña
$('#txt_pass_registro, #txt_pass_registro_2').keyup(function () {
	if ($('#txt_pass_registro').val()!=$('#txt_pass_registro_2').val()) {
		$('#txt_pass_registro_2').css("border-color", "#ff0000");
	} else {
		$('#txt_pass_registro_2').css("border-color", "#00FF00");
	}
});

