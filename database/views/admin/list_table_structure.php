<section class="box">

	<header>
		<h3><?php echo $table_name; ?></h3>
	</header>
	
	<table class="table-list">
		<thead>
			<tr>
				<th>Field Name</th>
				<th>Field Type</th>
				<th>Contstraint</th>
				<th>Notes</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($fields as $field): ?>
			<tr>
				<td><?=$field->name;?></td>
				<td><?=$field->type;?></td>
				<td><?=$field->max_length;?></td>
				<td><?php if($field->primary_key == "1") { ?>Primary Key<?php } ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
</section><!--box-->