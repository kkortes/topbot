<div class="fullwidth" style="background:url(<?=$app->url?>crow-1.0/crow.png) no-repeat;background-size:auto 100%; background-position: top right;">
  <div class="container">
    <div class="crow">
      <div class="ws-12">
        <h1><span class="icon icon-crow"></span> - <span class="small">the <i>smart</i> grid framework</span></h1>
        <p>
        Crow is made standalone which means you can apply to any of your current markup/web project.
        </p>

        <h2>Features</h2>
        <ul>
          <li>No tables, no absolute positioning, no floats, no clearfix'es</li>
          <li><i>Fly</i> functionality automatically sets widths of child elements</li>
          <li>Works in all modern browsers, smartphones, tablets and IE8+</li>
          <li>Smart center-center alignment (if desired)</li>
          <li>Responsive and configurable</li>
          <li><i>Fly</i> functionality is not working properly for IE8 therefore <a href="/index/page/crow-1.0/?download=crow-1.0/crow-ie.js">crow-ie.js</a> is required</li>
          <li>Can be used for columns, sliders, dot-navigation, side-by-side blocks - the only imagination is yourself!</li>
        </ul>

        <h2>Setup</h2>
        <ul>
          <li><a href="<?=$app->url?>?download=assets/css/crow.css">Download <span class="icon icon-crow"></span>.css</a> or 
          <a href="<?=$app->url?>?download=crow-1.0/crow.styl">download <span class="icon icon-crow"></span>.styl</a>
            <?/*or embed it directly through this API-url (http://cdn.crow.com)*/?></li>
          <li>Crow is just a regular .css-file, include in in your <?=htmlspecialchars('<head>')?>-tag and you are ready to go!</li>
        </ul>

        <h2>How to use</h2>

        <code class="inline-block bg-red bg-minus-5 text-red text-plus-2">
          <?=htmlspecialchars('<div class="crow">')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>1<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>2<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>3<?=htmlspecialchars('</div>')?><br />
          <?=htmlspecialchars('</div>')?>
        </code>
        <br /><br />makes<br /><br />
        <div class="crow">
          <div style="background-color:#e7e7e7;">1</div>
          <div style="background-color:#c7c7c7;">2</div>
          <div style="background-color:#a7a7a7;">3</div>
        </div>

        <br /><br />

        <code class="inline-block bg-red bg-minus-5 text-red text-plus-2">
          <?=htmlspecialchars('<div class="crow">')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="ws-2">')?>1<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="ws-8">')?>2<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="ws-2">')?>3<?=htmlspecialchars('</div>')?><br />
          <?=htmlspecialchars('</div>')?>
        </code>
        <br /><br />makes<br /><br />
        <div class="crow">
          <div class="ws-2" style="background-color:#e7e7e7;">1</div>
          <div class="ws-8" style="background-color:#c7c7c7;">2</div>
          <div class="ws-2" style="background-color:#a7a7a7;">3</div>
        </div>

        <br /><br />

        <code class="inline-block bg-red bg-minus-5 text-red text-plus-2">
          <?=htmlspecialchars('<div class="crow">')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="w-35">')?>1<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="w-50">')?>2<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="w-15">')?>3<?=htmlspecialchars('</div>')?><br />
          <?=htmlspecialchars('</div>')?>
        </code>
        <br /><br />makes<br /><br />
        <div class="crow">
          <div class="w-35" style="background-color:#e7e7e7;">1</div>
          <div class="w-50" style="background-color:#c7c7c7;">2</div>
          <div class="w-15" style="background-color:#a7a7a7;">3</div>
        </div>

        <br /><br />

        <code class="inline-block bg-red bg-minus-5 text-red text-plus-2">
          <?=htmlspecialchars('<div class="crow no-gutter">')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="w-35">')?>1<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="w-50">')?>2<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="w-15">')?>3<?=htmlspecialchars('</div>')?><br />
          <?=htmlspecialchars('</div>')?>
        </code>
        <br /><br />makes<br /><br />
        <div class="crow up no-gutter">
          <div class="w-35" style="background-color:#e7e7e7;">1</div>
          <div class="w-50" style="background-color:#c7c7c7;">2</div>
          <div class="w-15" style="background-color:#a7a7a7;">3</div>
        </div>

        <br /><br />

        <code class="inline-block bg-red bg-minus-5 text-red text-plus-2">
          <?=htmlspecialchars('<div class="crow fly">')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>1<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>2<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>3<?=htmlspecialchars('</div>')?><br />
          <?=htmlspecialchars('</div>')?>
        </code>
        <br /><br />makes<br /><br />
        <div class="crow fly">
          <div style="background-color:#e7e7e7;">1</div>
          <div style="background-color:#c7c7c7;">2</div>
          <div style="background-color:#a7a7a7;">3</div>
        </div>

        <br /><br />

        <code class="inline-block bg-red bg-minus-5 text-red text-plus-2">
          <?=htmlspecialchars('<div class="crow fly" style="height:100px;">')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>1<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="down">')?>2<?=htmlspecialchars('</div>')?><br />
          &nbsp;&nbsp;<?=htmlspecialchars('<div class="up">')?>3<?=htmlspecialchars('</div>')?><br />
          <?=htmlspecialchars('</div>')?>
        </code>
        <br /><br />makes<br /><br />
        <div class="crow fly" style="height:100px;">
          <div style="background-color:#e7e7e7;">1</div>
          <div class="down" style="background-color:#c7c7c7;">2</div>
          <div class="up" style="background-color:#a7a7a7;">3</div>
        </div>
      </div>
    </div>
  </div>
</div>