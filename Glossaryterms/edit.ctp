<section id="editGlossaryterm">
  <div class="row'>
    <div class="span12 glossaryterms form">
    <?php echo $this->Form->create('Glossaryterm'); ?>
    	<fieldset>
    		<legend><?php echo __('Edit Glossaryterm'); ?></legend>
    	<?php
    		echo $this->Form->input('id');
    		echo $this->Form->input('title');
    		echo $this->Form->input('definition');
    		echo $this->Form->input('Category');
    	?>
    	</fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
    </div>
  </div><!-- /.row -->
</section><!-- /#editGlossaryterm -->