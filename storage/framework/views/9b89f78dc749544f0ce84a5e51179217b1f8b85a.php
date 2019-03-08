<?php /* /home/lucas/curLaravel/resources/views/indexLogin.blade.php */ ?>
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
			<?php $__currentLoopData = $logins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($login->getUsuario()); ?></td>
					<td><?php echo e($login->getSenha()); ?></td>
				</tr>
				<form action="<?php echo e(route('alterarLogin' , $login->getId() )); ?>">
					<input type="text" name="usuario" value="<?php echo e($login->getUsuario()); ?>" required><br>
					<input type="text" name="senha" value="<?php echo e($login->getSenha()); ?>"><br>
					<input type="hidden" value="<?php echo e($login->getId()); ?>">
					<input type="submit" name="Alterar">
				</form>
				<form action="<?php echo e(route('deletarLogin' ,$login->getId())); ?>">
					<input type="submit" value="Deletar">
				</form><br>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<form method="post" action="<?php echo e(route('inserirLogin')); ?>">
				<?php echo e(csrf_field()); ?>

				<input type="text" name="usuario" placeholder="Nome" required>
				<input type="password" name="senha" placeholder="Senha">
				<input type="submit" value="Enviar">
			</form>
		</tbody>
	</table>
</body>
</html>