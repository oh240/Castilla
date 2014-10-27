<div class="rooms view">
    <h2><?php echo __('Room'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($room['Room']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($room['User']['id'], array('controller' => 'users', 'action' => 'view', $room['User']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($room['Room']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo h($room['Room']['description']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($room['Room']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($room['Room']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Room'), array('action' => 'edit', $room['Room']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Room'), array('action' => 'delete', $room['Room']['id']), array(), __('Are you sure you want to delete # %s?', $room['Room']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Rooms'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Room'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Voices'), array('controller' => 'voices', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Voice'), array('controller' => 'voices', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Voices'); ?></h3>
    <?php if (!empty($room['Voice'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Room Id'); ?></th>
                <th><?php echo __('Body'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($room['Voice'] as $voice): ?>
                <tr>
                    <td><?php echo $voice['id']; ?></td>
                    <td><?php echo $voice['user_id']; ?></td>
                    <td><?php echo $voice['room_id']; ?></td>
                    <td><?php echo $voice['body']; ?></td>
                    <td><?php echo $voice['created']; ?></td>
                    <td><?php echo $voice['modified']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'voices', 'action' => 'view', $voice['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'voices', 'action' => 'edit', $voice['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'voices', 'action' => 'delete', $voice['id']), array(), __('Are you sure you want to delete # %s?', $voice['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Voice'), array('controller' => 'voices', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
