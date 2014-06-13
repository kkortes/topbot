<!DOCTYPE html>
<html lang="en">
<head>
  <title>{ topbot }</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?=path()?>favicon.ico" />
  
  <!-- Crow standalone, remove if not desired -->
  <link rel="stylesheet" type="text/css" href="<?=path()?>assets/css/crow.css" />
  <link rel="stylesheet" type="text/css" href="<?=path()?>crow-1.0/icomoon/style.css" />

  <link rel="stylesheet" type="text/css" href="<?=path()?>assets/css/base.css" />
  <?
  if(function_exists('wp_head'))
    wp_head();
  ?>
</head>
<body>
<?=$app->get('parts/top')?>
<div id="wrapper">