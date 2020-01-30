<base href="<?=UserUrl;?>">
<?php if ( isset($cs) ) {
    foreach ($cs as $value) { ?>
        <script src="<?php echo UserUrl.$value ?>"></script>
    <?php }} ?>
<h3>User Header</h3>