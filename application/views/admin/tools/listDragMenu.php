
<script src="<?php echo base_url(); ?>assets/js/layout.js" type="text/javascript"></script>        
		<script src="<?php echo base_url(); ?>assets/js/shortable/jquery.sortable.js"></script>
		
			<script>
				$(function() {
					$('.sortable').sortable();
					$('.handles').sortable({
						handle: 'span'
					});
				});
			</script>
<?php $i = 1; ?>
<?php foreach ($menu as $row ) { ?>    
<li data-href="<?php echo $row->slug_pages; ?>" listmenu="<?php echo $i ?>"><span><div class="icon-handler"></div></span><?php echo $row->name_pages; ?></li>
<?php $i++; ?>
<?php } ?>
