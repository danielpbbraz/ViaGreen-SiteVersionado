<h2><?php echo $dados['Foto']['id']?></h2>
<p>Data: <?php echo date('d/m/Y H:m:s', strtotime($dados['Foto']['data']))?></p>
<p>Imagem: <br /><img src="<?php echo Configure::read('caminhoImage')."p_".$dados['Foto']['imagem'] ?>" /></p>
<p>Status: <?php echo $dados['Foto']['status']?></p>