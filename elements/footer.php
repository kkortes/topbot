    </div>
    <?=r('parts/bot')?>
    <?
    if(function_exists('wp_footer'))
      wp_footer();
    ?>
    <script src="<?=path()?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?=path()?>/node_modules/socket.io/node_modules/socket.io-client/dist/socket.io.min.js"></script>
    <script>window.dpath = '<?=path()?>'</script>
    <script src="<?=path()?>/assets/js/script.js"></script>
  </body>
</html>