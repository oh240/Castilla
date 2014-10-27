<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php
        echo $this->Form->input('nickname');
        echo $this->Form->input('password');
        echo $this->Form->input('mail_address');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
