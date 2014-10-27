<div class="users index">
    <h2><?php echo __('Users'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('img_url'); ?></th>
            <th><?php echo $this->Paginator->sort('nickname'); ?></th>
            <th><?php echo $this->Paginator->sort('password'); ?></th>
            <th><?php echo $this->Paginator->sort('description'); ?></th>
            <th><?php echo $this->Paginator->sort('mail_address'); ?></th>
            <th><?php echo $this->Paginator->sort('mail_notification'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['img_url']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['nickname']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['password']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['description']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['mail_address']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['mail_notification']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Rooms'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Voices'), array('controller' => 'voices', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Voice'), array('controller' => 'voices', 'action' => 'add')); ?> </li>
    </ul>
</div>
