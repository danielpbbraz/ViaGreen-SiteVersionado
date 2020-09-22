<h2><?php echo $dados['Imprensa']['titulo']?></h2>

<p>Id: <?php echo $dados['Imprensa']['id']?></p>
<p>Título: <?php echo $dados['Imprensa']['titulo']?></p>
<p>Data: <?php echo date('d/m/Y H:m:s', strtotime($dados['Imprensa']['data']))?></p>
<p>Imagem: <br /><img src="<?php echo Configure::read('caminhoImage')."imprensa_".$dados['Imprensa']['imagem'] ?>" /></p>
<p>Status: <?php echo $dados['Imprensa']['status']?></p>