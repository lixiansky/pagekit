<?php $app['styles']->add('system', 'extensions/system/assets/css/system.css') ?>

<div class="uk-grid pk-grid-small uk-grid-preserve" data-uk-grid-margin>

    <?php foreach ($columns as $column): ?>
    <div class="uk-width-medium-1-3">
        <?php foreach ($column as $id): ?>
        <div class="uk-panel uk-panel-box">
            <?= $widgets[$id] ?>
        </div>
        <?php endforeach ?>
    </div>
    <?php endforeach ?>

</div>