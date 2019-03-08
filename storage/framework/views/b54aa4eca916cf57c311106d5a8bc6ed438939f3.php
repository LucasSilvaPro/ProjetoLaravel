<?php /* /home/lucas/curLaravel/resources/views/alunos.blade.php */ ?>

	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' type='text/css' href='css/uikit.css'>
	<link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
	<link rel='stylesheet href='css/princessSophia.css'/>
	<link rel='stylesheet' type='text/css' href='css/style.css'>

	<script src='js/jquery.js'></script>

	<div class='uk-position-relative'>
			<div uk-sticky='sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar'>
		        <nav class='uk-navbar-container uk-navbar-transparent' uk-navbar id='menu'>
		            <div class='uk-navbar-center'>
		                <ul class='uk-navbar-nav'>
		                    <li><a href='/'>Home</a></li>
		                    <li class='uk-active'>
		                    	<a href='Cursos'>Cursos</a>
		                    </li>
		                    <li><a href='#'><img id='logu' src='imgs/logo.png'/></a></li>
		                    <li>
		                    	<a href='#'>Alunos</a>
		                    </li>		                  		 <li>
		                    	<a href='/Login'>Login</a>
		                    </li>                  
		                </ul>
		            </div>
		        </nav>
		      </div>
		    </div>
		</div>

		<div class='alunos1'><br><br>
			
			<center>
				<h1 color='black'>Alunos</h1><br><br>
				<form action="<?php echo e(route('busca')); ?>" method='post'>
					<?php echo e(csrf_field()); ?>

					<div class='uk-margin'>
				        <div class='uk-inline'>
				            <a class='uk-form-icon' href='#' uk-icon='icon: pencil'></a>
				            <input class='uk-input' name='pesquisa' placeholder='buscar Aluno' type='text'>
				        </div>
	    			</div>
				</form>
				<br>
				<table class='uk-table uk-table-middle uk-table-divider' border='2' width='80%'>

					<tr>
						<th class='uk-width-small'><center>Nome do Aluno</center></th>
						<th class='uk-width-small'><center>Curso</center></th>
						<th class='uk-width-small'><center>Email</center></th>
						<th class='uk-width-small'><center>Atualizar</center></th>
						<th class='uk-width-small'><center>Deletar</center></th>

												
					</tr>
						<?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<center>
								<tr>									
							 		<td><center><?php echo e($aluno->getNome_Aluno()); ?></center></td>
					
							 	
							 		<td>
							 			<?php if($aluno->getCurso_Id()==0): ?>

							 				<center><a href="">Matricular</a></center>
							 			<?php endif; ?>
							 		</td>							 									 		
							 		<td><center><?php echo e($aluno->getEmail_Aluno()); ?></center></td>
								 	<td><center>
								 			<form action="<?php echo e(route('atualizarAluno' ,$aluno->getId())); ?>" >							
												<div class='uk-margin'>
									       			<div class='uk-inline'>
									            		<span class='uk-form-icon' uk-icon='icon: user'></span>
														<input class='uk-input' type='text' name='nome_aluno' value='<?php echo e($aluno->getNome_Aluno()); ?>' placeholder='nome do Aluno' required/>
									        		</div>
									    		</div>
									    		<div class='uk-margin'>
									       			<div class='uk-inline'>
									            		<span class='uk-form-icon' uk-icon='icon: mail'></span>
														
														<input class='uk-input' type='text' name='email_aluno' value='<?php echo e($aluno->getEmail_Aluno()); ?>' placeholder='status do Curso' required/>
									        		</div>
									    		</div>
							    				<button class='uk-button uk-button-default demo' id='notificação' type='submit'>Atualizar</button>
											</form></center>
								 		</td>
								 		<td><center>											
									            <a href="<?php echo e(route('deletar' ,$aluno->getId())); ?>"><button class='uk-button uk-button-default'>Apagar</button></a>
									        
										</center></td>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							 	</tr>
							</center>
					</table>
					 	
					 	
				<br><br><a href="/adicionarAluno"><button class='uk-button uk-button-default'>Inserir Alunos</button></a><br><br>
								
			</center>
		</div>



<script src='js/ajax.js'></script>
<script src='js/alert.js'></script>
<script src='js/uikit.js'></script>
<script src='js/uikit-icons.js'></script>
<script src='js/javinha.js'></script>

