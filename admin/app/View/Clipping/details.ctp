<h2><?php echo $dados['Clipping']['titulo']?></h2>

<p>Id: <?php echo $dados['Clipping']['id']?></p>
<p>Título: <?php echo $dados['Clipping']['titulo']?></p>
<p>Data: <?php echo date('d/m/Y H:m:s', strtotime($dados['Clipping']['data']))?></p>
<?php if($dados['Clipping']['imagem']!=null): ?>
	<p>Imagem: <br /><img src="<?php echo Configure::read('caminhoImage')."p_".$dados['Clipping']['imagem'] ?>" /></p>
<?php else:  ?>
	<p><a href="<?php echo Configure::read('caminhoImage').$dados['Clipping']['pdf'] ?>" target="_blank">PDF</a></p>
<?php endif;  ?>
<p>Status: <?php echo $dados['Clipping']['status']?></p>