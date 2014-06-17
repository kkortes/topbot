<?
  $links = array(
    '<a href="http://getbootstrap.com/" target="_blank">Twitter bootstrap</a>',
    '<a href="http://css3pie.com/" target="_blank">CSS3 PIE</a>',
    '<a href="http://incident57.com/codekit/" target="_blank">CodeKit</a>'
  );

  $instructions = array(
    'configcodekit' => 'Configuration file for the project. Topbot is using '.$links[2].' as pre-processor and compiler.',
    'css' => 'Your sprite generator (SCSS), default stylesheet (LESS) and '.$links[0].' CSS-reset + responsivity is right here. The '.$links[1].'-fix for internet explorer 7 and 8 is also here.',
    'assets' => 'Here is where all assets are stored.',
    'PIE' => $links[1].'.<br /><br /><strong>Usage:</strong> move this directory to root and use '.$links[0].' mixins such as .border-radius() to get results.',
      'PIEhtc' => 'Required file for '.$links[1].' to work properly.',
      'PIEphp' => 'Required file for '.$links[1].' to work properly.',
      'PIE_IE678js' => 'Required file for '.$links[1].' to work properly.',
      'PIE_IE678_uncompressedjs' => 'Required file for '.$links[1].' to work properly.',
      'PIE_IE9js' => 'Required file for '.$links[1].' to work properly.',
      'PIE_IE9_uncompressedjs' => 'Required file for '.$links[1].' to work properly.',
      'PIE_uncompressedhtc' => 'Required file for '.$links[1].' to work properly.',
    'elements' => 'Default elements of topbot. To render files from here use default function r(filenamewithoutdotphp).',
      'breadcrumbphp' => 'Simple default breadcrumb, lists modules from /modules and pages from /pages.',
      'file-instructionsphp' => 'This file, lol.',
      'file-listphp' => 'The file responsible for rendering this page tree view.',
      'footerphp' => 'Footer file contains js-scripts and alternate call to wordpress "wp_footer()" function, you may remove this from the file.',
      'headerphp' => 'Header file contains CSS, meta tags and default web tags. Wordpress "wp_head()" function is here aswell, you may remove it from the file.',
      'modules' => 'Directory for all project modules. If a block of information will be repeatably used in your webproject, it\'s probably a module and belongs here.',
        'sizesphp' => 'The only module included with topbot by default. Shows the default module sizes.',
      'pages' => 'Directory with all the pages you will have in your webproject.',
        'downloadphp' => 'The page you are currently browsing.',
        'indexphp' => 'The project startpage.',
        'modulesphp' => 'A module template page which renders all module sizes for you to easly see if your modules are enough dynamic to fit in all sizes.',
      'parts' => 'Not a page nor a module? The element you are about to create is probably a part of parts!',
        'botphp' => 'Within this file you can find the almighty twin of top, bot (header)! A topbot project may have any number of bots.',
        'topphp' => 'Within this file you can find the almighty twin of bot, top (footer)! A topbot project may have any number of tops.',
      'faviconico' => 'The default included favicon of your webproject. Use filetype .ico and dimensions 16x16 pixels.',
      'img' => 'Your image directory. Why isn\'t this called "images"? Answer: because it\'s not.',
        'ajax-loadergif' => 'A small and simple loader gif for (mainly) ajax load requests. This may be used elsewhere aswell.',
        'dummies' => 'If you have images that wont be in the final release of your web, put them here and remove this directory upon launch, anything image that breakes is a image that you anyways have to replace.',
        'sprite' => 'Put any number of small .png\'s in here! Upon saving "sprity.scss" in your css-directory will autocreate a sprite image for you, meanwhile creating a sprity.css in your css-directory with all poiting coordinates to all the images within the sprite.',
        'sprite-x' => 'Same as sprite, but here you should use images that will repeat X-wise only. The largest width of any image in here, must be applied to all images in order for the sprite that genereates to look fancy.',
      'indexphp' => 'The master file of all files within topbot. Why? Take a look inside and see.',
      'js' => 'Put all your js-scripts + js-libraries in here. You\'ll also find bootstrap default js\'s here. Remember to include them by your own since no one of them are included by default.',
        'scriptcoffee' => 'With '.$links[2].' this renders into script.js',
        'scriptjs' => 'Your default .js-file included in this project.',
        'tests' => 'Don\'t mind this. I don\'t.',
      'less' => 'In here you\'ll find ALOT of .less\'es. Don\'t be scared, they are here to help you! All of them are from '.$links[0].' and can be included by changing the file "bootstrap.less".',
        'tests' => 'I told you! Don\'t mind the tests-directories! They are for no good!',
      'stylecss' => 'Project defaults. This file makes the top-bot-magic possible. Just leave him alone and put all of your css in the style.less file found in /assets/less.',
  );
?>
<div class="viewport">
  <div class="start">
    Click any file or directory for instructions.
  </div>
  <?
  foreach($instructions as $file => $instruction) {
  ?>
    <div class="<?=$file?>" style="display:none;"><?=$instruction?></div>
  <?
  }
  ?>
</div>