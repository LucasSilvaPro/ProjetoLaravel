<!DOCTYPE html>
<html>
<head>
	<title>Agora vai</title>
</head>
<body>
	<h1>Tururu</h1>
	<table>
		<tbody>
			<tr>
				<th>Nome</th>
				<th>Senha</th>
			</tr>
			@foreach($logins as $login)
				<tr>
					<td>{{$login->getUsuario()}}</td>
					<td>{{$login->getSenha()}}</td>
				</tr>
				<form action="{{route('alterarLogin' , $login->getId() )}}">
					<input type="text" name="usuario" value="{{$login->getUsuario()}}" required><br>
					<input type="text" name="senha" value="{{$login->getSenha()}}"><br>
					<input type="hidden" value="{{$login->getId()}}">
					<input type="submit" name="Alterar">
				</form>
				<form action="{{route('deletarLogin' ,$login->getId())}}">
					<input type="submit" value="Deletar">
				</form><br>
			@endforeach
			<form method="post" action="{{route('inserirLogin')}}">
				{{csrf_field()}}
				<input type="text" name="usuario" placeholder="Nome" required>
				<input type="password" name="senha" placeholder="Senha">
				<input type="submit" value="Enviar">
			</form>
		</tbody>
	</table>
</body>
</html>