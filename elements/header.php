<!DOCTYPE html>
<html lang="en">
<head>
  <title>{ topbot }</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?=$app->url?>favicon.ico?v=2" />
  
  <!-- Crow standalone, remove if not desired -->
  <link rel="stylesheet" type="text/css" href="<?=$app->url?>assets/css/crow.css" />
  <link rel="stylesheet" type="text/css" href="<?=$app->url?>crow-1.0/icomoon/style.css" />

  <link rel="stylesheet" type="text/css" href="<?=$app->url?>assets/css/base.css" />
</head>
<body class="<?=(isset($_GET['page']) ? $_GET['page'] : 'index')?>">
<?=$app->get('parts/top')?>
<div id="wrapper">