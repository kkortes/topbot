<!DOCTYPE html>
<html lang="en">
<head>
  <title>{ topbot }</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" type="image/png" :href="favicon" />
  <script src="http://cscms.kortes.se/latest.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo $app->url?>public/css/base.css?v=<?php echo date('hs')?>" />
</head>
<body class="page-<?php echo (isset($_GET['page']) ? $_GET['page'] : 'index')?>" v-scroll="onScroll">
<?php echo $app->get('parts/top')?>
<div id="wrapper">