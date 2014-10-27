<div class="users view">
    <h2><?php echo __('User'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($user['User']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Img Url'); ?></dt>
        <dd>
            <?php echo h($user['User']['img_url']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nickname'); ?></dt>
        <dd>
            <?php echo h($user['User']['nickname']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Password'); ?></dt>
        <dd>
            <?php echo h($user['User']['password']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo h($user['User']['description']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Mail Address'); ?></dt>
        <dd>
            <?php echo h($user['User']['mail_address']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Mail Notification'); ?></dt>
        <dd>
            <?php echo h($user['User']['mail_notification']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($user['User']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($user['User']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Rooms'), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Voices'), array('controller' => 'voices', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Voice'), array('controller' => 'voices', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Rooms'); ?></h3>
    <?php if (!empty($user['Room'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Description'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($user['Room'] as $room): ?>
                <tr>
                    <td><?php echo $room['id']; ?></td>
                    <td><?php echo $room['user_id']; ?></td>
                    <td><?php echo $room['name']; ?></td>
                    <td><?php echo $room['description']; ?></td>
                    <td><?php echo $room['created']; ?></td>
                    <td><?php echo $room['modified']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'rooms', 'action' => 'view', $room['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'rooms', 'action' => 'edit', $room['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rooms', 'action' => 'delete', $room['id']), array(), __('Are you sure you want to delete # %s?', $room['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Room'), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Voices'); ?></h3>
    <?php if (!empty($user['Voice'])): ?>
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
            <?php foreach ($user['Voice'] as $voice): ?>
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
