<section id="addGlossarytermsForm">
  <div class="row'>
    <div class="span12 glossaryterms form">
      <?php echo $this->Form->create('Glossaryterm'); ?>
  	  <fieldset>
  		  <legend><?php echo __('Add Glossary Term'); ?></legend>
  	    <?php
  		    echo $this->Form->input('title');
  		    echo $this->Form->input('definition');
  		    echo $this->Form->input('Category');
  	    ?>
  	  </fieldset>
      <?php echo $this->Form->end(__('Submit')); ?>
    </div>
  </div><!-- /.row -->
</section>