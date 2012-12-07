<section id="viewCategory">
  <div class="row">
    <div class="span2 actions">
    	<ul class="nav nav-tabs nav-stacked">
    		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
    		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
    		<li><?php echo $this->Html->link(__('See All'), array('action' => 'index')); ?> </li>
    		<li><?php echo $this->Html->link(__('List Glossaryterms'), array('controller' => 'glossaryterms', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Glossaryterm'), array('controller' => 'glossaryterms', 'action' => 'add')); ?> </li>
    	</ul>
    </div>
    <div class="span10 categories view">
      <h2><?php echo h($category['Category']['name']); ?></h2>
      <p><?php echo h($category['Category']['definition']); ?></p>

      <div class="related">
        <h3><?php echo __('Related Glossaryterms'); ?></h3>
        <?php if (!empty($category['Glossaryterm'])): ?>
        <table class="table table-bordered table-striped" cellpadding = "0" cellspacing = "0">
        <tr>
          <th><?php echo __('Title'); ?></th>
          <th><?php echo __('Definition'); ?></th>
          <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
          $i = 0;
          foreach ($category['Glossaryterm'] as $glossaryterm): ?>
          <tr>
            <td><?php echo $this->Html->link($glossaryterm['title'], array('controller' => 'glossaryterms', 'action' => 'view', $glossaryterm['id'])); ?></td>
            <td><?php echo $glossaryterm['definition']; ?></td>
            <td class="actions">
              <?php echo $this->Html->link(__('Edit'), array('controller' => 'glossaryterms', 'action' => 'edit', $glossaryterm['id'])); ?>
              <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'glossaryterms', 'action' => 'delete', $glossaryterm['id']), null, __('Are you sure you want to delete # %s?', $glossaryterm['id'])); ?>
            </td>
          </tr>
        <?php endforeach; ?>
        </table>
        <?php endif; ?>
      </div>
    </div>
  </div><!-- /.row -->
</section><!-- /#viewCategory -->