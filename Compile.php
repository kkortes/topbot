<?php
if(isset($_GET['compile'])) {
  ?>
  <div class="modal" style="position: fixed;width:100%;height:100%;top:0;left:0;background-color: rgba(0,0,0,.9);">
    <div class="nest crow" style="height:100%;top:0;left:0;color:white;">
      <div class="card ws-12" style="padding: 10px;">
        <div class="spacer half"></div>
        <div class="crow">
          <?php
          if(!isset($_POST['dest'])) {
          ?>
          <div class="ws-4">
            <h1>HTML compiler</h1>
            <p>With topbot you can compile a single PHP-page into raw HTML.
            <br /><br />
            To your right you'll find the configuration for this.
            <br /><br />
            <span class="small" style="color:red;">Warning: the compile will overwrite any exisiting files/directories with the same name at the destination, so be sure it does not overwrite anything you want to keep.</span>
            </p>
          </div>
          <div class="ws-8 up">
            <form method="post" action="">
              <div class="form crow up no-gutter">
                <div class="crow ws-6">
                  <?php
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
                      $thisfile == 'gulp' ||
                      $thisfile == 'assets' ||
                      $thisfile == 'public' ||
                      $thisfile == 'favicon.ico' ||
                      $thisfile == 'favicon-desktop.ico' ||
                      $thisfile == 'favicon-tablet.ico' ||
                      $thisfile == 'favicon-smartphone.ico' ||
                      $thisfile == 'package.json' ||
                      $thisfile == 'gulpfile.js'
                    )
                      $show = true;

                  ?>
                  <div class="ws-2">
                    <?php if($show === true) { ?>
                    <input type="checkbox" id="<?php echo $thisfile?>" name="<?php echo $thisfile?>" value="<?php echo $thisfile?>" checked />
                    <?php }elseif($show) { ?>
                    <input type="checkbox" id="<?php echo $thisfile?>" name="<?php echo $thisfile?>" />
                    <?php }else{ ?>
                    -
                    <?php } ?>
                  </div>
                  <div class="ws-10">
                    <label for="<?php echo $thisfile?>"><?php echo $thisfile?></label>
                  </div>
                  <?php } ?>
                </div>
                <div class="ws-6">
                  <label for="dest">Destination directory <span class="small">(from root)</span></label>
                  <input type="text" id="dest" name="dest" value="html/" />
                  <div class="spacer half"></div>

                  <label for="dest">Name for HTML-file</label>
                  <input type="text" id="name" name="name" value="<?php echo isset($_GET['page']) ? $_GET['page'].'.html' : 'index.html'?>" />
                  <div class="spacer half"></div>

                  <input type="submit" class="bg-cyan text-white" value="Compile" />
                </div>
              </div>
            </form>
          </div>
          <?php
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
              Success! <a href="<?php echo $app->url?>">Close this window</a>
            </div>
            <?php
          }
          ?>
        </div>
        <div class="spacer half"></div>
      </div>
    </div>
  </div>
  <?php
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