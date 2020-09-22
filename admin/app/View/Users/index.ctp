<h1>Users</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Data</th>
		<th>Opções</th>
    </tr>
    <?php foreach ($dados as $item): ?>
    <tr>
        <td><?php echo $item['User']['id']; ?></td>
        <td><?php echo $item['User']['username']; ?></td>
        <td><?php echo date('d/m/Y H:m:s', strtotime($item['User']['created'])); ?></td>
		<td>
			<?php echo $this->Html->link("Detalhes",array('controller' => 'users', 'action' => 'details', $item['User']['id'])); ?>	
			<?php echo $this->Html->link("Editar",array('controller' => 'users', 'action' => 'edit', $item['User']['id'])); ?>
		<?php echo $this->Html->link("Excluir",array('controller' => 'users', 'action' => 'delete', $item['User']['id'])); ?>
		</td>
    </tr>
    <?php endforeach; ?>
</table>
<p class="paginacao"><?php echo $this->Paginator->numbers(array('first' => 'First page')); ?></p>