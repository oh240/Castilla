<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('img_url');
        echo $this->Form->input('nickname');
        echo $this->Form->input('password');
        echo $this->Form->input('description');
        echo $this->Form->input('mail_address');
        echo $this->Form->input('mail_notification');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Rooms'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Voices'), array('controller' => 'voices', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Voice'), array('controller' => 'voices', 'action' => 'add')); ?> </li>
    </ul>
</div>
