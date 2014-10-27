<div class="rooms index">
    <h2><?php echo __('Rooms'); ?></h2>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <?php foreach ($rooms as $room): ?>
            <li>
                <?=
                $this->Html->link($room['Room']['name'], [
                    'action' => 'view',
                    $room['Room']['id']
                ]);
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
