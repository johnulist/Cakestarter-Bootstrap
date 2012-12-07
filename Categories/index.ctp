<section id="viewCategories">
  <div class="row">
    <div class="span2 actions">
      <ul class="nav nav-tabs nav-stacked">
        <li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?></li>
      </ul>
    </div>
    <div class="span10 categories index">
      <h2><?php echo __('Categories'); ?></h2>
      <table class="table table-bordered table-striped" cellpadding="0" cellspacing="0">
      <tr>
          <th><?php echo $this->Paginator->sort('name'); ?></th>
          <th><?php echo $this->Paginator->sort('definition'); ?></th>
          <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php
      foreach ($categories as $category): ?>
      <tr>
        <td>
          <?php echo $this->Html->link($category['Category']['name'], array('action' => 'view', $category['Category']['id'])); ?>
        </td>
        <td><?php echo h($category['Category']['definition']); ?>&nbsp;</td>
        <td class="actions">
          <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id'])); ?>
          <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
        </td>
      </tr>
    <?php endforeach; ?>
      </table>
      <p>
      <?php
      echo $this->Paginator->counter(array(
      'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
      ));
      ?>  </p>

      <div class="pagination">
      <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
      ?>
      </div><!-- /.paging -->
    </div><!-- /.span10 -->
  </div><!-- /.row -->
</section><!-- /#viewCategories -->