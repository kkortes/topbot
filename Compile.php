<?
if(isset($_GET['compile'])) {
  ?>
  <div class="modal" style="position: fixed;">
    <div class="nest crow" style="height:100%;">
      <div class="card ws-12 bg-white">
        <div class="spacer half"></div>
        <div class="crow">
          <?
          if(!isset($_POST['dest'])) {
          ?>
          <div class="ws-4">
            <h1>HTML compiler</h1>
            <p>With topbot you can compile a single php-page to raw HTML.
            <br /><br />
            To your right you'll find a configuration for this.
            <br /><br />
            <span class="small text-red">Warning: the compile will overwrite any exisiting files/directories with the same name at the destination, so be sure it does not overwrite anything you want to keep.</span>
            </p>
          </div>
          <div class="ws-8 up">
            <form method="post" action="">
              <div class="form crow up no-gutter">
                <div class="crow ws-6">
                  <?
                  foreach(glob(__DIR__.'/*') as $file) {
                    $thisfile = explode('/', $file);
                    $thisfile = end($thisfile);

                    $show = 'unchecked';

                    if(
                      $thisfile == 'elements' ||
                      $thisfile == 'Compile.php' ||
                      $thisfile == 'App.php' ||
                      $thisfile == '404.php' ||
                      $thisfile == 'functions.php' ||
                      $thisfile == 'index.php' ||
                      $thisfile == 'SAMPLE.config.json.php'
                      )
                      $show = false;

                    if(
                      $thisfile == 'assets' ||
                      $thisfile == 'bower_components' ||
                      $thisfile == 'favicon.ico' ||
                      $thisfile == 'package.json' ||
                      $thisfile == 'Gruntfile.coffee'
                    )
                      $show = true;

                  ?>
                  <div class="ws-2">
                    <? if($show === true) { ?>
                    <input type="checkbox" id="<?=$thisfile?>" name="<?=$thisfile?>" value="<?=$thisfile?>" checked />
                    <? }elseif($show) { ?>
                    <input type="checkbox" id="<?=$thisfile?>" name="<?=$thisfile?>" />
                    <? }else{ ?>
                    -
                    <? } ?>
                  </div>
                  <div class="ws-10">
                    <label for="<?=$thisfile?>"><?=$thisfile?></label>
                  </div>
                  <? } ?>
                </div>
                <div class="ws-6">
                  <label for="dest">Destination directory <span class="small">(from root)</span></label>
                  <input type="text" id="dest" name="dest" value="html/" />
                  <div class="spacer half"></div>

                  <label for="dest">Name for html-file</label>
                  <input type="text" id="name" name="name" value="<?=isset($_GET['page']) ? $_GET['page'].'.html' : 'index.html'?>" />
                  <div class="spacer half"></div>

                  <input type="submit" class="bg-cyan text-white" value="Compile" />
                </div>
              </div>
            </form>
          </div>
          <?
          }else{
            $dest = $_POST['dest'];
            unset($_POST['dest']);
            $htmlfile = $_POST['name'];
            unset($_POST['name']);

            $dest = $app->server_root.$dest;

            if(!file_exists($dest))
              mkdir($dest);

            $file = $dest.$htmlfile;
            $buffer = $app->htmlbuffer;
            file_put_contents($file, $buffer);

            foreach($_POST as $file) {
              if(!file_exists($dest.$file) && is_dir($app->server_root.$file))
                mkdir($dest.$file);
              recurse_copy($app->server_root.$file, $dest.$file);
            }
            ?>
            <div class="ws-12">
              Successfull! <a href="<?=$app->url?>">Close this window</a>
            </div>
            <?
          }
          ?>
        </div>
        <div class="spacer half"></div>
      </div>
    </div>
  </div>
  <?
}

function recurse_copy($source, $dest) {
  // Check for symlinks
  if (is_link($source)) {
      return symlink(readlink($source), $dest);
  }
  // Simple copy for a file
  if (is_file($source)) {

      return copy($source, $dest);
  }
  // Make destination directory
  if (!is_dir($dest)) {
      mkdir($dest);
  }
  // Loop through the folder
  $dir = dir($source);
  while (false !== $entry = $dir->read()) {
    // Skip pointers
    if ($entry == '.' || $entry == '..') {
        continue;
    }

    // Deep copy directories
    recurse_copy("$source/$entry", "$dest/$entry");
  }

  // Clean up
  $dir->close();
  return true;
}
?>