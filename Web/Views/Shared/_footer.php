<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="js/js.js"></script>

<?php if ( isset($js) ) {
    foreach ($js as $value) { ?>
        <script src="<?php echo WebUrl.$value ?>"></script>
    <?php }} ?>
</body>
</html>

