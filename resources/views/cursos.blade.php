
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' type='text/css' href='css/uikit.css'>
	<link rel='stylesheet' type='text/css' href='css/uikit-rtl.css'>
	<link rel='stylesheet href='css/princessSophia.css'>
	<link rel='stylesheet' type='text/css' href='css/style.css'>

	<div class='uk-position-relative'>
			<div uk-sticky='sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar'>
		        <nav class='uk-navbar-container uk-navbar-transparent' uk-navbar id='menu'>
		            <div class='uk-navbar-center'>
		                <ul class='uk-navbar-nav'>
		                    <li><a href='/'>Home</a></li>
		                    <li class='uk-active'>
		                    	<a href='#'>Cursos</a>
		                    </li>
		                    <li><a href='#'><img id='logu' src='imgs/logo.png'/></a></li>
		                    <li>
		                    	<a href='Alunos'>Alunos</a>
		                    </li>		                   
			                <li>
			                	<a href='#' id='requisitarLogin'>Login</a>
			                </li>
			                		                    
		                </ul>
		            </div>
		        </nav>
		      </div>
		</div>

		<div class='cursos1'><br><br><br>
			<center>

				<h1 color='black'>Nossos Cursos</h1><br>
				<table class='uk-table uk-table-middle uk-table-divider' border='2' width='80%'>

					<tr>
						<th class='uk-width-small'><center>Id do Curso</center></th>	
						<th class='uk-width-small'><center>Nome do Curso</center></th>
						<th class='uk-width-small'><center>Status</center></th>
						<th class='uk-width-small'><center>Atualizar Curso</center></th>
						<th class='uk-width-small'><center>Deletar</center></th>
					</tr>
				@foreach($cursos as $curso)			
				 	<tr>
				 		<td><center>{{$curso->getId()}}</center></td>
				 		<td><center>{{$curso->getNome_Curso()}}</center></td>
				 		<td><center>{{$curso->getStatus_Curso()}}</center></td>
				 		<td><center>
				 			<form action="{{route('atualizar' , $curso->getId())}}" >
								<div class='uk-margin'>
					       			<div class='uk-inline'>
					            		<span class='uk-form-icon' uk-icon='icon: folder'></span>
										<input class='uk-input' type='text' name='nome_curso' value='{{$curso->getNome_Curso()}}' placeholder='nome do Curso' required/>
					        		</div>
					    		</div>
					    		<input type="hidden" name="{{$curso->getId()}}">
					    		<div class='uk-margin'>
					       			<div class='uk-inline'>
					            		<span class='uk-form-icon'></span>
										<input class='uk-radio' type='radio' name='status_curso' value='1' placeholder='status do Curso' required/>Ativo
										<input class='uk-radio' type='radio' name='status_curso' value='0' placeholder='status do Curso' required/>Indisponivel
										
					        		</div>
					    		</div>
	    						<button class='uk-button uk-button-default demo' type='submit'>Atualizar</button>
							</form>
						</center></td>
				 		<td>
				 		<center>				 			
							<a href="{{route('apagarCurso',$curso->getId())}}"><button class='uk-button uk-button-default'>Apagar</button></a>		        			</td>
						</center>
				 	</tr>
				@endforeach

				</table><br><br>

				<br><a href="/adicionarCurso"><button class='uk-button uk-button-default'>Inserir Cursos</button></a><br><br>
				
			</center>
		</div>


<script src='js/jquery.js'></script>
<script src='js/ajax.js'></script>
<script src='js/alert.js'></script>
<script src='js/uikit.js'></script>
<script src='js/uikit-icons.js'></script>
<script src='js/javinha.js'></script>
