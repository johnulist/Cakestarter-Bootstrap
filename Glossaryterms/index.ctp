<section id="viewGlossaryterms">
  <div class="row">
    <div class="span2 actions">
      <ul class="nav nav-tabs nav-stacked">
        <li><?php echo $this->Html->link(__('New Term'), array('action' => 'add')); ?></li>
      </ul>
    </div>
    <div class="span10 glossaryterms index">
    	<h2><?php echo __('Terms'); ?></h2>
    	<table class="table table-bordered table-striped" cellpadding="0" cellspacing="0">
    	<tr>
    			<th><?php echo $this->Paginator->sort('title'); ?></th>
    			<th><?php echo $this->Paginator->sort('definition'); ?></th>
    			<th class="actions"><?php echo __('Actions'); ?></th>
    	</tr>
    	<?php
    	foreach ($glossaryterms as $glossaryterm): ?>
    	<tr>
    		<td><?php echo $this->Html->link($glossaryterm['Glossaryterm']['title'], array('action' => 'view', $glossaryterm['Glossaryterm']['id'])); ?></td>
    		<td><?php echo h($glossaryterm['Glossaryterm']['definition']); ?>&nbsp;</td>
    		<td class="actions">
    			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $glossaryterm['Glossaryterm']['id'])); ?>
    			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $glossaryterm['Glossaryterm']['id']), null, __('Are you sure you want to delete # %s?', $glossaryterm['Glossaryterm']['id'])); ?>
    		</td>
    	</tr>
    <?php endforeach; ?>
    	</table>
    	<p>
    	<?php
    	echo $this->Paginator->counter(array(
    	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    	));
    	?>	</p>

    	<div class="paging">
    	<?php
    		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
    		echo $this->Paginator->numbers(array('separator' => ''));
    		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    	?>
    	</div>
    </div>
  </div><!-- /.row -->
</section><!-- /#viewGlossaryterms -->