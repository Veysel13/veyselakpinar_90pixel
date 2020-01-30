<base href="<?=AdminUrl;?>">
<?php if ( isset($cs) ) {
    foreach ($cs as $value) { ?>
        <script src="<?php echo AdminUrl.$value ?>"></script>
    <?php }} ?>
<h3>Admin Header</h3>