    </div>
    <?=$app->get('parts/bot')?>
    <?
    if(function_exists('wp_footer'))
      wp_footer();
    ?>
    <script src="<?=path()?>bower_components/jquery/dist/jquery.min.js"></script>
    <script>window.dpath = '<?=path()?>'</script>
    <script src="<?=path()?>assets/js/script.js"></script>
  </body>
</html>