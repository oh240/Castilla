<div class="rooms index">
    <h2><?php echo __('Rooms'); ?></h2>

    <div id="msg_area">
        <?php foreach ($voices as $voice) : ?>
            <div class="post_article">
                <?= $voice['Voice']['body']; ?>
                <div class="post_time_area">
                    post time:<?= $voice['Voice']['created']; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <br/>
    <hr/>
    <br/>

    <div id="post_area">
        <?= $this->Form->create('Voice'); ?>
        <?=
        $this->Form->input('body', [
            'type' => 'text',
            'label' => false
        ]);
        ?>
        <?=
        $this->Form->button('post!!', [
            'type' => 'button',
            'id' => 'post_voice_button',
            'onsubmit' => 'return false;'
        ]);
        ?>
        <?= $this->Form->end(); ?>
    </div>
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
