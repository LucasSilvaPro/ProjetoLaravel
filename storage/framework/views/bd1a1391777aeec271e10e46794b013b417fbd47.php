<?php /* /home/lucas/curLaravel/resources/views/adicionarCurso.blade.php */ ?>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' type='text/css' href='css/uikit.css'>
    <link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
    <link rel='stylesheet href='css/princessSophia.css'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>

<center>

	<form action="<?php echo e(route('adicionando')); ?>" method='post' style="width: 50%;margin-top: 10%;">
        <a href="/Cursos"><button class="uk-button uk-button-default">Voltar Para Cursos</button></a>
        <?php echo e(csrf_field()); ?>

        <fieldset>
			<legend><h1>Adicionar Curso</h1></legend><br>
			<div class='uk-margin'>
				<label>Nome do Curso:</label>
       			<div class='uk-inline'>
            		<span class='uk-form-icon' uk-icon='icon: user'></span>
            		<input class='uk-input' name='nome_curso' placeholder='Nome do Curso' type='text' required/>
        		</div>
    		</div><br>
    		<label>Status:</label>
    		<input type='radio' class='uk-radio' name='status_curso' value='1'/>Disponivel
    		<input type='radio' class='uk-radio' name='status_curso' value='0'/>Indisponivel
    		<br><br><br>
    		<input class='uk-button uk-button-default' type='submit' value='Adicionar Curso'/>
        </fieldset>
	</form>
</center>

<script src='js/uikit.js'></script>
<script src='js/uikit-icons.js'></script>
	