<h1>foto</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Data</th>
		<th>Status</th>
		<th>Opções</th>
    </tr>
    <?php foreach ($dados as $item): ?>
    <tr>
        <td><?php echo $item['Foto']['id']; ?></td>
        <td><?php echo date('d/m/Y H:m:s', strtotime($item['Foto']['data'])); ?></td>
		<td><?php echo $item['Foto']['status'] == 1?"Ativo":"Inativo" ?></td>
		<td>
			<?php echo $this->Html->link("Detalhes",array('controller' => 'foto', 'action' => 'details', $item['Foto']['id'])); ?>	
			<?php echo $this->Html->link("Editar",array('controller' => 'foto', 'action' => 'edit', $item['Foto']['id'])); ?>
		<?php echo $this->Html->link("Excluir",array('controller' => 'foto', 'action' => 'delete', $item['Foto']['id'])); ?>
		</td>
    </tr>
    <?php endforeach; ?>
</table>
<p class="paginacao"><?php echo $this->Paginator->numbers(array('first' => 'First page')); ?></p>