<div class="uk-form-row">
    <label for="form-feed-title" class="uk-form-label"><?= __('Title') ?></label>
    <div class="uk-form-controls">
        <input id="form-feed-title" class="uk-form-width-large" type="search" name="widget[title]" value="<?= $widget->get('title') ?>" required>
    </div>
</div>

<div class="uk-form-row">
    <span class="uk-form-label"><?= __('User Type') ?></span>
    <div class="uk-form-controls uk-form-controls-text">
        <?php foreach (['login' => __('Logged in'), 'registered' => __('Last registered')] as $value => $option): ?>
        <p class="uk-form-controls-condensed">
            <label><input type="radio" name="widget[show]" value="<?= $value ?>" <?= $widget->get('show', 'login') == $value ? 'checked' : '' ?>> <?= $option ?></label>
        </p>
        <?php endforeach ?>
    </div>
</div>

<div class="uk-form-row">
    <label class="uk-form-label"><?= __('Number of Users') ?></label>
    <div class="uk-form-controls">
        <select class="uk-form-width-large" name="widget[count]">
            <?php foreach ([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16] as $value): ?>
            <option value="<?= $value ?>" <?= $widget->get('count') == $value ? 'selected' : '' ?>><?= $value ?></option>
            <?php endforeach ?>
        </select>
    </div>
</div>