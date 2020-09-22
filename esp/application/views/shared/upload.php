<?php
    //Template::add('css', array('../js/vendor/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css'));
    Template::add('js', array('vendor/plupload/plupload.full.js'));

    $max_files  = isset($max_files) ? $max_files : 1;
    $files      = isset($files) && $files ? $files : array();
    $files      = is_array($files) ? $files : array($files);
    $w          = isset($w) ? $w : 100;
    $h          = isset($h) ? $h : 100;
    $crop       = (isset($crop) ? $crop : 1);
    $crop       = $crop ? 1 : 0;
    $resize     = (isset($resize) ? $resize : 1);
    $resize     = $resize ? 1 : 0;
    $can_edit   = isset($can_edit) ? $can_edit : false;
    $input_html = isset($input_html) ? $input_html : '<span class="fa fa-plus mac-hack"></span>Escolher Fotos';
?>

<div id="<?php echo $name ?>_upload" data-name="<?php echo $name ?>">
    <button class="openMore" id="<?php echo $name ?>_pickfiles"><?php echo $input_html ?></button>
</div>
