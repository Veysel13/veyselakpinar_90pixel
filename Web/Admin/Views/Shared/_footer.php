<base href="<?=AdminUrl;?>">
<?php if ( isset($js) ) {
    foreach ($js as $value) { ?>
        <script src="<?php echo AdminUrl.$value ?>"></script>
    <?php }} ?>
<h3>Admin Footer</h3>