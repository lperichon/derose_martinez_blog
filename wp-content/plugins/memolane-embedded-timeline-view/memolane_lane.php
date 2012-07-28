<div class="wrap">
	<h2><?php echo _e( $pageData['pageTitle'] ); ?></h2>
	<?php if($pageData['update'] === true): ?>
		<div class='updated'><p><strong><?php _e($pageData['updateText']); ?></strong></p></div>
	<?php endif; ?>
	
	<form name="memolane-form" method="post" action="<?php echo $pageData['action'] ?>?page=memolane&action=<?php if($pageData['id'] !== NULL) { echo 'update'; } else { echo 'save'; } ?>">
		<input type="hidden" name="memolane-hidden" value="Y" />
		<?php if($pageData['id'] !== NULL): ?>
			<input type="hidden" name="memolane-id" value="<?php echo $pageData['id'] ?>" />
		<?php endif; ?>	
		<h4><?php echo _e( 'Memolane User Info' ) ?></h4>
		<p><div style="float:left;width:150px"><?php _e("Memolane User Name: " ); ?></div><input type="text" name="memolane-username" value="<?php echo $pageData['lane']['username']; ?>" size="20"></p>
		<p><div style="float:left;width:150px"><?php _e("Memolane Lane Title: " ); ?></div><input type="text" name="memolane-title" value="<?php echo $pageData['lane']['title']; ?>" size="20"></p>
		<hr />
		<h4><?php echo _e( 'Memolane Embed Options (use css values)' ) ?></h4>
		<p><div style="float:left;width:150px"><?php _e("Width: " ); ?></div><input style="margin-right:10px" type="text" name="memolane-width" value="<?php echo $pageData['lane']['width']; ?>" size="20"><?php _e(" ex: 500 or 100%" ); ?></p>
		<p><div style="float:left;width:150px"><?php _e("Height: " ); ?></div><input style="margin-right:10px" type="text" name="memolane-height" value="<?php echo $pageData['lane']['height']; ?>" size="20"><?php _e(" ex: 500 or 100%" ); ?></p>
		<p><div style="float:left;width:150px"><?php _e("Background Color: " ); ?></div><input style="margin-right:10px" type="text" name="memolane-background" value="<?php echo $pageData['lane']['background']; ?>" size="20"><?php _e(" ex: #000044 or transparent" ); ?></p>
		<p><div style="float:left;width:150px"><?php _e("Border: " ); ?></div><input style="margin-right:10px" type="text" name="memolane-border" value="<?php echo $pageData['lane']['border']; ?>" size="20"><?php _e(" ex: 1px solid #9AF" ); ?></p>
		<?php if($pageData['id'] !== NULL): ?>
		<p><strong><div style="float:left;width:150px"><?php _e("Shortcode: " ); ?></div><?php _e("[memolane id=" . $pageData['id'] . "]" ); ?></strong></p>
		<?php endif; ?>
		<p class="submit">  
        	<input type="submit" name="Submit" value="<?php _e($pageData['submit']) ?>" />
        	<?php if($pageData['id'] !== NULL): ?>
        		<span class="trash" style="margin-left: 10px;"><a class="submitdelete" title="Move this lane to the Trash" href="<?php echo $location . $pageData['id']; ?>&action=trash">Delete Lane</a></span>
        	<?php endif; ?>	
        </p>  
    </form>
</div>