<?php /* /home/lucas/curLaravel/resources/views/adicionarAluno.blade.php */ ?>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' type='text/css' href='css/uikit.css'>
    <link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
    <link rel='stylesheet href='css/princessSophia.css'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>

<center>
	<form action="<?php echo e(route('adicionandoA')); ?>" method='post' style="width: 50%;margin-top: 10%;">
            <?php echo e(csrf_field()); ?>

        <a href="/Alunos"><button class="uk-button uk-button-default">Voltar Para Alunos</button></a>
        <fieldset>
			<legend><h1>Adicionar Aluno</h1></legend><br>
			<div class='uk-margin'>
       			<div class='uk-inline'>
            		<span class='uk-form-icon' uk-icon='icon: user'></span>
            		<input class='uk-input' name='nome_aluno' placeholder='Nome Aluno' type='text' required/>
        		</div>
    		</div>
    		<div class='uk-margin'>
       			<div class='uk-inline'>
            		<span class='uk-form-icon' uk-icon='icon: mail'></span>
            		<input class='uk-input' name='email_aluno' placeholder='Email do Aluno' type='text' required/>
        		</div>
    		</div>
    		<input type="hidden" name="curso_id" value="0">
    		<input class='uk-button uk-button-default' type='submit' value='Inserir Aluno'/>
        </fieldset>
	</form>
</center>

<script src='js/uikit.js'></script>
<script src='js/uikit-icons.js'></script>

