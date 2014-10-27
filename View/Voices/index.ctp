<div class="voices index">
    <h2><?php echo __('Voices'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('room_id'); ?></th>
            <th><?php echo $this->Paginator->sort('body'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($voices as $voice): ?>
            <tr>
                <td><?php echo h($voice['Voice']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($voice['User']['id'], array('controller' => 'users', 'action' => 'view', $voice['User']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($voice['Room']['name'], array('controller' => 'rooms', 'action' => 'view', $voice['Room']['id'])); ?>
                </td>
                <td><?php echo h($voice['Voice']['body']); ?>&nbsp;</td>
                <td><?php echo h($voice['Voice']['created']); ?>&nbsp;</td>
                <td><?php echo h($voice['Voice']['modified']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $voice['Voice']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $voice['Voice']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $voice['Voice']['id']), array(), __('Are you sure you want to delete # %s?', $voice['Voice']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>    </p>

    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Voice'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Rooms'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
    </ul>
</div>
