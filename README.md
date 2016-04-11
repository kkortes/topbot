{ topbot }
======

A minimalistic PHP no-style-theme starter kit.

I've come to the conclusion that all websites shares some equal denominators. Topbot takes the standards as far as it gets without making the website personal. Nothing is forced upon you, you choose what to use and what to keep.

- HTML-suit compiler added! You can visit myurl.com/?compile and compile a single PHP page to clean HTML! If you want every single page that you've created HTML'ed, just go through every one of them and run the ?compile.
- Crow is updated. Beside from .stylus it's now also compile'able in .less :> this is also true for topbot's CSS.
- Leaf removed from standard topbot. If you want to include leaf in your project you will have to do it yourself. (http://getleaf.eu) After all, it's a no-style-theme.
- Grunt added.
- Topbot now includes crow! Crow is a grid css framework for awesome box alignment within rows. 
  You can read more about crow here (http://getcrow.eu)
- Custom .htaccess added! It's possible to remove if not desired. Uses "smart"-url with the 
  structure /topbot/pagename/variable/value/variable2/value2?variable3=value3 you can go as far as you like!
- IMG-tag automagic added. This is solely for markup purposes (to speed up the process)
- The scrollbar always shows (check to the right), this prevents page from "sliding back and fourth" upon page navigation
- The theme uses smart sticky bot (footer) - the content of bot may be dynamic (normally you set a height for this to work properly)