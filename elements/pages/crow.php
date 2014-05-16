<div class="fullwidth" style="background:url(<?=path()?>/crow-1.0/crow.png) no-repeat;background-size:cover;">
  <div class="container">
    <div class="crow">
      <div class="ws-12">
        <?=r('breadcrumb')?>

        <h2>This is <span class="icon icon-crow"></span></h2>
        <p>
        <span class="icon icon-crow"></span> is <i>the grid framework</i> you want. It's made standalone which means you can apply to any of your current markup/web project.
        </p>

        <h2>The goal</h2>
        <p>
        Ever thought of a grid framework that automatically sets your widths (percentually) of elements? <span class="icon icon-crow"></span> does that.<br />
        Ever easly wanted to align elements center-center? <span class="icon icon-crow"></span> does that.
        </p>

        <h2>Upsides</h2>
        <ul>
          <li>Uses less and less classes than any other grid framework</li>
          <li>Works in all modern browsers, smartphones, tablets AND IE8+</li>
          <li>Smart center-center alignment (if desired)</li>
          <li>No tables, no absolute positioning, no floats, no clearfix'es</li>
          <li>Supports responsive layouts by default</li>
          <li>Nestable. Se what I did there? "Nest"-able ;)</li>
          <li>Can be used for specific modules of you web, sliders, dot-navigation, side-by-side blocks - the only imagination is yourself!</li>
        </ul>

        <h2>Downsides</h2>
        <ul>
          <li>Not working properly for IE8 therefore <i>fly</i> functionality requires <a href="/index/page/crow-1.0/?download=crow-1.0/crow-ie.js">crow-ie.js</a>. Malfunction in IE could be seen as an upside, right? ;)</li>
        </ul>

        <h2>Setup</h2>
        <ul>
          <li><a href="/index/page/crow-1.0?download=css/crow.css">Download <span class="icon icon-crow"></span>.css</a> or 
          <a href="/index/page/crow-1.0?download=crow-1.0/crow.less">download <span class="icon icon-crow"></span>.less</a>
            <?/*or embed it directly through this API-url (http://cdn.crow.com)*/?></li>
          <li>Crow is just a regular .css-file, include in in your <?=htmlspecialchars('<head>')?>-tag and you are ready to go!</li>
        </ul>

        <h2>How to use</h2>

        <code style="display:inline-block;">
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

        <code style="display:inline-block;">
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

        <code style="display:inline-block;">
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

        <code style="display:inline-block;">
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

        <code style="display:inline-block;">
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

        <code style="display:inline-block;">
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