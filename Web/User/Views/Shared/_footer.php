<base href="<?=UserUrl;?>">
<?php if ( isset($js) ) {
    foreach ($js as $value) { ?>
        <script src="<?php echo UserUrl.$value ?>"></script>
    <?php }} ?>
<h3>User Footer</h3>