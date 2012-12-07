<section id="viewGlossaryterm">
  <div class="row">
    <div class="span2 actions">
    	<ul class="nav nav-tabs nav-stacked">
     		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $glossaryterm['Glossaryterm']['id'])); ?> </li>
     		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $glossaryterm['Glossaryterm']['id']), null, __('Are you sure you want to delete # %s?', $glossaryterm['Glossaryterm']['id'])); ?> </li>
     		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?> </li>
     		<li><?php echo $this->Html->link(__('View All'), array('action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
     	</ul>
   	</div>
    <div class="span10 glossaryterms view">
      <h2><?php  echo $glossaryterm['Glossaryterm']['title']; ?></h2>
    	<p><?php echo h($glossaryterm['Glossaryterm']['definition']); ?></p>

      <div class="related">
      	<h3><?php echo __('Related Categories'); ?></h3>
      	<?php if (!empty($glossaryterm['Category'])): ?>
      	<table class="table table-bordered table-striped" cellpadding = "0" cellspacing = "0">
      	<tr>
      		<th><?php echo __('Name'); ?></th>
      		<th><?php echo __('Definition'); ?></th>
      		<th class="actions"><?php echo __('Actions'); ?></th>
      	</tr>
      	<?php
      		$i = 0;
      		foreach ($glossaryterm['Category'] as $category): ?>
      		<tr>
      			<td><?php echo $this->Html->link($category['name'], array('controller' => 'categories', 'action' => 'view', $category['id'])); ?></td>
      			<td><?php echo $category['definition']; ?></td>
      			<td class="actions">
      				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $category['id'])); ?>
      				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $category['id']), null, __('Are you sure you want to delete # %s?', $category['id'])); ?>
      			</td>
      		</tr>
      	<?php endforeach; ?>
      	</table>
      	<?php endif; ?>
      </div>
    </div><!-- /.span10 -->
  </div><!-- /.row -->
</section><!-- /#viewGlossaryterm -->