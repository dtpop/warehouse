<?php

$notice = [];
if ($this->getElement('notice') != '') {
    $notice[] = rex_i18n::translate($this->getElement('notice'), false);
}

if (isset($this->params['warning_messages'][$this->getId()]) && !$this->params['hide_field_warning_messages']) {
    $notice[] = '<span class="text-warning">' . rex_i18n::translate($this->params['warning_messages'][$this->getId()], false) . '</span>'; //    var_dump();
}
if (count($notice) > 0) {
    $notice = '<p class="help-block">' . implode('<br />', $notice) . '</p>';
} else {
    $notice = '';
}

$class = $this->getElement('required') ? 'form-is-required ' : '';

$class_group = trim('form-group uk-margin ' . $this->getWarningClass());

$class_label = ['control-label'];
$field_before = '';
$field_after = '';

if (trim($this->getElement('grid')) != '') {
    $grid = explode(',', trim($this->getElement('grid')));

    if (isset($grid[0]) && $grid[0] != '') {
        $class_label[] = trim($grid[0]);
    }

    if (isset($grid[1]) && $grid[1] != '') {
        $field_before = '<div class="' . trim($grid[1]) . '">';
        $field_after = '</div>';
    }
}

$rows = $this->getElement('rows');
if (!$rows) {
    $rows = 10;
}

$attributes = [
    'class' => 'form-control uk-textarea',
    'name' => $this->getFieldName(),
    'id' => $this->getFieldId(),
    'rows' => $rows,
];

$attributes = $this->getAttributeElements($attributes, ['placeholder', 'pattern', 'required', 'disabled', 'readonly']);

echo '<div class="'.$class_group.'" id="'.$this->getHTMLId().'">
<label class="uk-form-label '.implode(' ', $class_label).'" for="'.$this->getFieldId().'">'.$this->getLabel().'</label>
<div class="uk-form-controls">
'.$field_before.'<textarea '.implode(' ', $attributes).'>'.htmlspecialchars($this->getValue()).'</textarea>'.$notice.$field_after.
'</div></div>';


/*
<div class="uk-margin">
    <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
</div>
 
 */