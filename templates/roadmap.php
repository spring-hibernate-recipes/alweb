<table style="width: 100%;" cellspacing="0" cellpadding="10">
	<tr style="font-weight: bold">
		<td>Status</td>
		<td>Tentative Date</td>
		<td style="width: 60%">Task</td>
	</tr>
	<?php foreach ($tasks as $task) {?>
	<tr>
		<td><?php echo $taskStatus[$task['status']]?></td>
		<td><?php echo $task['tentativeDate']?></td>
		<td><?php echo $task['task']?></td>
	</tr>
	<?php }?>
</table>
