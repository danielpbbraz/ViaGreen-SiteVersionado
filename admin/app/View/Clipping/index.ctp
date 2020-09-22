<h1>Clippings</h1>
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
        <td><?php echo $item['Clipping']['id']; ?></td>
        <td><?php echo $item['Clipping']['titulo']; ?></td>
        <td><?php echo date('d/m/Y H:m:s', strtotime($item['Clipping']['data'])); ?></td>
		<td><?php echo $item['Clipping']['status'] == 1?"Ativo":"Inativo" ?></td>
		<td>
			<?php echo $this->Html->link("Detalhes",array('controller' => 'clipping', 'action' => 'details', $item['Clipping']['id'])); ?>	
			<?php echo $this->Html->link("Editar",array('controller' => 'clipping', 'action' => 'edit', $item['Clipping']['id'])); ?>
		<?php echo $this->Html->link("Excluir",array('controller' => 'clipping', 'action' => 'delete', $item['Clipping']['id'])); ?>
		</td>
    </tr>
    <?php endforeach; ?>
</table>
<p class="paginacao"><?php echo $this->Paginator->numbers(array('first' => 'First page')); ?></p>