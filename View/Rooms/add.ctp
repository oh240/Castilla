<div class="rooms form">
    <?php echo $this->Form->create('Room'); ?>
    <fieldset>
        <legend><?php echo __('Add Room'); ?></legend>
        <?php
        echo $this->Form->input('user_id');
        echo $this->Form->input('name');
        echo $this->Form->input('description');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Rooms'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Voices'), array('controller' => 'voices', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Voice'), array('controller' => 'voices', 'action' => 'add')); ?> </li>
    </ul>
</div>
