<h1>Imprensas</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Data</th>
		<th>Status</th>
		<th>Opções</th>
    </tr>
    <?php foreach ($dados as $item): ?>
    <tr>
        <td><?php echo $item['Imprensa']['id']; ?></td>
        <td><?php echo $item['Imprensa']['titulo']; ?></td>
        <td><?php echo date('d/m/Y H:m:s', strtotime($item['Imprensa']['data'])); ?></td>
		<td><?php echo $item['Imprensa']['status'] == 1?"Ativo":"Inativo" ?></td>
		<td>
			<?php echo $this->Html->link("Detalhes",array('controller' => 'Imprensa', 'action' => 'details', $item['Imprensa']['id'])); ?>	
			<?php echo $this->Html->link("Editar",array('controller' => 'Imprensa', 'action' => 'edit', $item['Imprensa']['id'])); ?>
		<?php echo $this->Html->link("Excluir",array('controller' => 'Imprensa', 'action' => 'delete', $item['Imprensa']['id'])); ?>
		</td>
    </tr>
    <?php endforeach; ?>
</table>
<p class="paginacao"><?php echo $this->Paginator->numbers(array('first' => 'First page')); ?></p>