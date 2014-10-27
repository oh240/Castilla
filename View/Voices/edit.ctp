<div class="voices form">
    <?php echo $this->Form->create('Voice'); ?>
    <fieldset>
        <legend><?php echo __('Edit Voice'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('user_id');
        echo $this->Form->input('room_id');
        echo $this->Form->input('body');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Voice.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Voice.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Voices'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Rooms'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
    </ul>
</div>
