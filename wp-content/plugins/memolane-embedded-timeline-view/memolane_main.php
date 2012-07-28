<div class="wrap">
	<h2><?php echo _e( 'Lanes' ); ?></h2>
	<p><?php echo _e('Add embedded lane to any page or post by inserting the shortcode shown into it.'); ?></p>
	<table class="wp-list-table widefat fixed media" cellspacing="0">
		<thead>
			<tr>
				<th scope="col" id="id" class="manage-column column-id sortable desc" style="width:4em;">
					<a href="?page=memolane&orderby=id"><span>ID</span><span class="sorting-indicator"></span></a>
				</th>
				<th scope="col" id="username" class="manage-column column-username sortable desc" style="width: 30%">
					<a href="?page=memolane&orderby=username"><span>User Name</span><span class="sorting-indicator"></span></a>
				</th>
				<th scope="col" id="title" class="manage-column column-title sortable desc" style="width: 30%">
					<a href="?page=memolane&orderby=title"><span>Title</span><span class="sorting-indicator"></span></a>
				</th>
				<th scope="col" id="shortcode" class="manage-column column-title" style="width: 25%">
					<stron><span>Shortcode</span></strong>
				</th>
				<th scope="col" id="date" class="manage-column column-date sortable asc" style="width: 15%">
					<a href="?page=memolane&orderby=date"><span>Date</span><span class="sorting-indicator"></span></a>
				</th>	
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th scope="col" class="manage-column column-id sortable desc">
					<a href="?page=memolane&orderby=id"><span>ID</span><span class="sorting-indicator"></span></a>
				</th>
				<th scope="col" class="manage-column column-username sortable desc" style="">
					<a href="?page=memolane&orderby=username"><span>User Name</span><span class="sorting-indicator"></span></a>
				</th>
				<th scope="col" class="manage-column column-title sortable desc" style="">
					<a href="?page=memolane&orderby=title"><span>Title</span><span class="sorting-indicator"></span></a>
				</th>
				<th scope="col" class="manage-column column-title" style="">
					<stron><span>Shortcode</span></strong>
				</th>
				<th scope="col" class="manage-column column-date sortable asc" style="">
					<a href="?page=memolane&orderby=date"><span>Date</span><span class="sorting-indicator"></span></a>
				</th>	
			</tr>
		</tfoot>

		<tbody id="the-list">
		<?php if(count($lanes) > 0): ?>
			<?php foreach($lanes as $lane): ?>
				<tr id="lane-<?php echo $lane->id; ?>" class="format-standard hentry" valign="top">
					<td class="column-id lane-id">
						<a href="<?php echo $location . $lane->id; ?>" title="Edit Lane"><strong><?php echo $lane->id; ?></strong></a>
					</td>
					<td class="column-username lane-username">
						<a href="<?php echo $location . $lane->id; ?>" title="Edit Lane"><strong><?php echo $lane->username; ?></strong></a>
						<div class="row-actions">
							<span class="edit"><a href="<?php echo $location . $lane->id; ?>" title="Edit this lane">Edit</a> | </span>
							<span class="trash"><a class="submitdelete" title="Move this lane to the Trash" href="<?php echo $location . $lane->id; ?>&action=trash">Trash</a></span>
						</div>
					</td>
					<td class="column-title lane-title">
						<?php echo $lane->title; ?>
					</td>
					<td class="column-title lane-shortcode">
						<strong>[memolane id=<?php echo $lane->id; ?>]</strong>
					</td>
					<td class="column-date lane-date">
						<?php echo $lane->date; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr class="no-items"><td class="colspanchange" colspan="7">No lanes found.</td></tr>
		<?php endif; ?>		
		</tbody>
	</table>
</div>