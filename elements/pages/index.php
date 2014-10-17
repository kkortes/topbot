<div class="fullwidth">
  <div class="container">
    <div class="crow">
      <div class="ws-12">
        <h2>What is topbot?</h2>
        <p>Topbot is a fully responsive no-style-theme and focuses on giving you the best possible start for a php web project.
        </p>
        <p>If you are about to start a project from scratch or just create some markup from a design you recieved - topbot is the perfect place to start.
        </p>
        <p>Get to know topbot! You won't regret it.
        </p>
        <a href="https://github.com/kkortes/topbot" class="button waves-effect"><i class="icon icon-github"></i>&nbsp;&nbsp;&nbsp;&nbsp;Github</a>

        <h2>Philosophy</h2>
        <p>All web projects have a shared denominator. In this theme I've taken all the similarities in every web project and put them together in a small, lightweight and easy to understand package.
        </p>
        <hr />

        <h2>Features</h2>
        <ul>
          <li><strong>New!</strong> Topbot now includes <i class="icon icon-leaf text-green"></i>. Leaf is a CSS framework based on <a href="http://google.com/spec/design" target="_blank">Google's material design</a>.</li>
          <li>App.php is now included. You can read more about it <a href="/app">here</a></li>
          <li>.htaccess added. Uses "smart-url" with the structure myweb.com/pagename/variable/value/variable2/value2?variable3=value3. Requires a virtual host to be set up for your local domain.</li>
          <li>Put a <?=htmlspecialchars('<img />')?> tag anywhere and a dummy image will pop up, <a href="/modules/module/sizes">like so</a></li>
          <li>The scrollbar is always visible (check to the right), this prevents page from "sliding back and fourth" upon page navigation</li>
          <li>Uses smart sticky footer, the contents of { bot } may be dynamic (normally you set a height for this to work properly)</li>
        </ul>
        <hr />

        <h2>Instructions</h2>
        <div class="crow no-gutter">
          <div class="ws-3">
            <?=$app->get('file-list')?>
          </div>
          <div class="ws-5">
            <?=$app->get('file-instructions')?>
          </div>
          <div class="ws-4">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>