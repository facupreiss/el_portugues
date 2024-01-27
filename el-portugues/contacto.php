<?php
include_once "header.php"
?>

<main>

<div>
  <h2 class="centrar predio">Contactanos!</h2>
</div>

<div>

<form class="centra col-6 offset-3" action="datos.php" method="post" enctype= "multipart/form-data">

  <div class="row">
    <div class="form-group letraform  col-6">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
    </div>

    <div class="form-group letraform  col-6 ">
      <label for="apellido">Apellido</label>
      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
    </div>
  </div>
    
  <div class="row">
    <div class="form-group letraform col-6 ">
      <label for="correo">Email</label>
      <input type="email" class="form-control" id="correo" name="email" placeholder="nombre@ejemplo.com" required>
    </div>

    <div class="form-group letraform col-6 ">
      <label for="telefono">Teléfono</label>
      <input type="tel" class="form-control" id="telefono" name="numero" placeholder="Número de teléfono" required>
    </div>
  </div>

  <div class="row">
    <div class="form-group letraform col-12">
      <label for="mensaje">Mensaje</label>
      <textarea class="form-control" id="mensaje" rows="3" name="comentario" placeholder="Escriba su mensaje aquí..."></textarea>
    </div>
  </div>
    
  <div class="row">
<label for="arch"></label>
<input class="formu" accept=".pdf" type="file" id="arch" name="arch">
</div>

  <div>
		<label class="formu">
		<input  type="checkbox" id="cb"/>
		Acepto términos y condiciones
		</label>
	</div>

    <div id="botonpadding">
      <button type="submit" id="sub" disabled="disabled" class=" btn btn-primary botonenviar col-2">Enviar</button>
  </div>
  
</form>

</div>


<script type="text/javascript">
	var cb = document.getElementById('cb');
	var sub = document.getElementById('sub');
	
	cb.onclick = function(){
		if(cb.checked){
			sub.disabled = false; 
		}else{
			sub.disabled = true; 
		}
		
	}

</script>

</main>

<?php
include_once "footer.php"
?>