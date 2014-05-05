topbot
======

Small and easy to set up layout-theme for creation of any website.

I've come to the conclusion that every website (almost every) on the internet shares some equal denominators.
Therefore I don't see the reason to recreate code when setting up a new website-project. So I created topbot.

Top and bot are used for what you would call header and footer, but hold on! There's more to it. 
You can duplicated either one of them and it still looks great, they are not unique. 
This means they're independent but can still be used as header and footer (HTML5 <header> and <footer> may 
also be used if you want to be rebelish).

- New! Topbot now includes crow! Crow is a grid css framework for awesome box alignment within rows. 
  You can read more about crow here (http://getcrow.eu)
- New! .htaccess added! Of course possible to remove if not desired. Uses "smart"-url with the 
  structure /topbot/pagename/variable/value/variable2/value2?variable3=value3 you can go as far as you like!
- Uses LESS for CSS and Coffescript for JS
- Try put a <img /> tag anywhere and watch the magic!
- The scrollbar always shows (check to the right), this prevents page from "sliding back and fourth" 
  upon page navigation
- The theme uses smart sticky bot (footer) - the content of bot may be dynamic (normally you set a height 
  for this to work properly)
- The theme encurages you to build your web-application with dynamic modules rather than static elements.
  Web apps today should be responsive if possible - right?
- CSS3pie is included by default, which means you can use rounded borders for non-supported browsers!
  (notice! for this to work you have to move the PIE-directory to your web root)
