    </div>
    <?php echo $app->get('parts/bot')?>

    <script>window.app_url = '<?php echo $app->url?>'</script>
    <script>window.app_server_url = '<?php echo $app->server_url?>'</script>
    <script src="<?php echo $app->url?>public/js/base.js"></script>
  </body>
</html>