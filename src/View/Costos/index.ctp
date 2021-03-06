<div class="costos index">
	<h2><?php echo __('Costos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('curso_id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_costo');?></th>
			<th><?php echo $this->Paginator->sort('valor_costo');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($costos as $costo): ?>
	<tr>
		<td><?php echo h($costo['Costo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($costo['Curso']['nombre_del_curso'], array('controller' => 'cursos', 'action' => 'view', $costo['Curso']['id'])); ?>
		</td>
		<td><?php echo h($costo['Costo']['nombre_costo']); ?>&nbsp;</td>
		<td><?php echo h($costo['Costo']['valor_costo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $costo['Costo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $costo['Costo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $costo['Costo']['id']), null, __('Are you sure you want to delete # %s?', $costo['Costo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Costo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
