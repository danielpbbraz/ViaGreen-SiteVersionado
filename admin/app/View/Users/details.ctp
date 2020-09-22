<h2><?php echo $dados['User']['titulo']?></h2>

<p>Id: <?php echo $dados['User']['id']?></p>
<p>Título: <?php echo $dados['User']['username']?></p>
<p>Data: <?php echo date('d/m/Y H:m:s', strtotime($dados['User']['created']))?></p>