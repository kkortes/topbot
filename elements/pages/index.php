<div class="container">
  <div class="crow">
    <div class="ws-12">
      <?=r('breadcrumb')?>

      <h2>What is topbot?</h2>
      <p>
      Topbot is the simplest yet best theme you will ever use. It's based on <a href="http://getbootstrap.com/" target="_blank">Twitter bootstrap</a> with the additions of { top }, { bot } and some <i>other stuff</i>.
      </p>
      <hr />

      <h2>What is { top } / { bot }?</h2>
      <p>
      Top and bot are used for what you would call <i>header and footer</i>, but hold on! There's more to it. You can duplicated either one of them and it still looks great, they are not unique. This means they're independent but <strong>can</strong> still be used as header and footer (HTML5 <?=htmlspecialchars('<header>')?> and <?=htmlspecialchars('<footer>')?> may also be used if you want to be rebelish).
      </p>
      <hr />

      <h2>Other stuff</h2>
      <ul>
        <li><strong>New!</strong> Topbot now includes <i>crow</i>! Crow is a grid css framework for awesome box alignment within rows. You can read more about crow <a href="/crow">here</a></li>
        <li><strong>New!</strong> .htaccess added! Of course possible to remove if not desired. Uses "smart"-url with the structure /topbot/pagename/variable/value/variable2/value2?variable3=value3 you can go as far as you like!</li>
        <li>Uses LESS for CSS and Coffescript for JS</li>
        <li>Try put a <?=htmlspecialchars('<img />')?> tag anywhere and watch the magic!</li>
        <li>The scrollbar always shows (check to the right), this prevents page from "sliding back and fourth" upon page navigation</li>
        <li>The theme uses smart sticky bot (footer) - the content of bot may be dynamic (normally you set a height for this to work properly)</li>
        <li>The theme encurages you to build your web-application with dynamic modules rather than static elements. Web apps today should be responsive if possible - right?</li>
        <li><a href="http://css3pie.com/" target="_blank">CSS3pie</a> is included by default, which means you can use rounded borders for non-supported browsers! (notice! for this to work you have to move the PIE-directory to your web root)</li>
      </ul>
    </div>
  </div>
</div>