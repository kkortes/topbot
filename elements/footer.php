    </div>
    <?=$app->get('parts/bot')?>

    <script>window.app_url = '<?=$app->url?>'</script>
    <script>window.app_server_url = '<?=$app->server_url?>'</script>
    <script src="<?=$app->url?>assets/js/libs.js"></script>
    <script src="<?=$app->url?>assets/js/script.js"></script>
  </body>
</html>