<div class="voices view">
    <h2><?php echo __('Voice'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($voice['Voice']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($voice['User']['id'], array('controller' => 'users', 'action' => 'view', $voice['User']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Room'); ?></dt>
        <dd>
            <?php echo $this->Html->link($voice['Room']['name'], array('controller' => 'rooms', 'action' => 'view', $voice['Room']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Body'); ?></dt>
        <dd>
            <?php echo h($voice['Voice']['body']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($voice['Voice']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($voice['Voice']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Voice'), array('action' => 'edit', $voice['Voice']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Voice'), array('action' => 'delete', $voice['Voice']['id']), array(), __('Are you sure you want to delete # %s?', $voice['Voice']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Voices'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Voice'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Rooms'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
    </ul>
</div>
