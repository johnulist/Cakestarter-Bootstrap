<section id="addCategoriesForm">
  <div class="row">
    <div class="span12 categories form">
      <?php echo $this->Form->create('Category'); ?>
      <fieldset>
        <legend><?php echo __('Add Category'); ?></legend>
        <?php
          echo $this->Form->input('name');
          echo $this->Form->input('definition');
        ?>
      </fieldset>
      <?php echo $this->Form->end(__('Submit')); ?>
    </div>
  </div><!-- /.row -->
</section><!-- /#addCategoriesForm -->