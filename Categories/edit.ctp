<section id="editCategoriesForm">
  <div class="row">
    <div class="span12 categories form">
    <?php echo $this->Form->create('Category'); ?>
    	<fieldset>
    		<legend><?php echo __('Edit Category'); ?></legend>
    	<?php
    		echo $this->Form->input('id');
    		echo $this->Form->input('name');
    		echo $this->Form->input('definition');
    	?>
    	</fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
    </div>
  </div><!-- /.row -->
</section><!-- /#editCategoriesForm -->