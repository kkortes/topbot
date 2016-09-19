<div class="fullwidth">
  <div class="nest">
    <div class="spacer"></div>

    <img src="<?=$app->url?>assets/images/topbot.png" style="width: 80px; display: inline-block;">
    <h1 style="display: inline-block; vertical-align: top;margin: 25px 0 0 10px;">{ topbot }</h1>
    <p>A minimalistic PHP no-style-theme starter kit.
    </p>

    <a href="https://github.com/kkortes/topbot" target="_blank"><span class="icon icon-github"></span>&nbsp;&nbsp;Download</a>

    <div class="spacer"></div>
  </div>
</div>
<div class="fullwidth">
  <div class="nest">
    <div class="crow no-gutter">
      <div class="ws-12">
        <ul class="inline crow up">
          <li class="ws-12">
            <h2>Short introduction</h2>
            What is topbot? Why should I use topbot? These are two questions you may ask yourself. Topbot started as a small CSS project which solved the problem with <i>a real</i> sticky footer.<br /><br />During years of web development I found myself coming back to grab what topbot has to offer. Over time, small additions has been made to topbot. The idea is not to push your project in any direction, but to offer the lowest common denominator for all web projects.<br /><br />If something in topbot doesn't suit your need, simply remove it.
            <div class="spacer"></div>
          </li>
          <li class="ws-6">
            <h2>JS</h2>
            <p>Minimal amount of JS. Basically what you want and need for every web project. Write ES6, compile to ES5.
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>CSS</h2>
            <p>Minimal amount of CSS. Basically what you want and need for every web project. Write LESS/Stylus, compile to CSS.
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>Device and orientation detection JS</h2>
            <p>Topbot bundles a smart solution to media queries.<br />Utils.getDevice() currently is <strong>{{ device }}</strong><br />Utils.getOrientation() currently is <strong>{{ orientation }}</strong>
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>Device and orientation detection CSS</h2>
            The JS-detection goes hand-in-hand with the CSS.
            <br /><code>@media @tablet { color: <span class="less-color">red</span>; }</code> for LESS
            <br /><code>@media $tablet { color: <span class="stylus-color">blue</span>; }</code> for Stylus.
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>Vue.js</h2>
            <p>I use Vuejs as my frontend framework of choice. This is totally optional but highly recommended. Check it out <a href="https://vuejs.org/" target="_blank">here</a>.
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>Gulp</h2>
            <p>Topbot is built using gulp. It comes with a nice structure and is already set up to deal with ES6 using babelify and browserify. 
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>Crow Grid Framework</h2>
            <p><i class="icon icon-crow text-black"></i> is a smart CSS grid framework. You can check it out <a href="http://getcrow.eu" target="_blank">here</a>.
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>App.php</h2>
            <p>Hand crafted library for smart project variables. You can read more about it <a href="/app">here</a>.
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>Compile.php - PHP-to-HTML</h2>
            <p>Visit myurl.localhost/?compile to compile your PHP project into HTML. <a href="<?=$app->url?>?compile">Try it here</a>.
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>.htaccess</h2>
            <p>Smart .htaccess. Requires PHP and a virtual host to be set up for your local domain.
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>Markup img's</h2>
            <p>Put a <?=htmlspecialchars('<img />')?> tag anywhere and a placeholder image will pop up, <a href="/modules/module/image">like so</a>.
            </p>
            <div class="spacer half"></div>
          </li>
          <li class="ws-6">
            <h2>Real sticky footer</h2>
            <p>{ bot } has dynamic height and sticks. It just works.
            </p>
            <div class="spacer half"></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>