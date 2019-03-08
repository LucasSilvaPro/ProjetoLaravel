<?php /* /home/lucas/curLaravel/resources/views/editarC.blade.php */ ?>
	
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' type='text/css' href='css/uikit.css'>
<link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
<link rel='stylesheet href='css/princessSophia.css'/>
<link rel='stylesheet' type='text/css' href='css/style.css'>
	<center>
<?php $id=$_GET['id'];
	echo "$id";
 ?>
		<form action='#' method='post' id='atualizar'>
			<fieldset>
				<legend><h1>Atualizar Curso</h1></legend>
				<div class='uk-margin'>
					<h4>Nome Novo do Curso:</h4>
	       			<div class='uk-inline'>
	            		<span class='uk-form-icon' uk-icon='icon: user'></span>
						<input class='uk-input' type='text' name='nome_curso' value='<?php echo e($curso->getNome_Curso()); ?>' placeholder='nome do Curso' required/>
	        		</div>
	    		</div>
	    		<div class='uk-margin'>
	    			<h4>Status Novo:</h4>
	       			<div class='uk-inline'>
	            		<span class='uk-form-icon'></span>
						<input class='uk-radio' type='radio' name='status_curso' value='1' placeholder='status do Curso' required/>Disponível
						<input class='uk-radio' type='radio' name='status_curso' value='0' placeholder='status do Curso' required/>Indisponivel
						
	        		</div>
	    		</div><br>
	    		<button class='uk-button uk-button-default demo' id='notificação' type='submit'>Atualizar Curso</button><br><br>
    		</fieldset>
	</form><br>
		<a href='cursos.php'><button class='uk-button uk-button-default'>Voltar para Cursos</button></a>
	</center>

<script src='js/jquery.js'></script>
<script src='js/ajax.js'></script>
<script src='js/alert.js'></script>
<script src='js/uikit.js'></script>
<script src='js/uikit-icons.js'></script>
<script src='js/javinha.js'></script>
