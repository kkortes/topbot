<?
$url = $_SERVER['PHP_SELF'];
if(strpos($url, '.php')) {
  $explode = explode('/', $url);
  $end = end($explode);
  $url = str_replace($end, '', $url);
}

$json = array(
  'localhost' => array(
    'url'         => $url,
    'root'        => __DIR__,
    'mysql'       => array(
        'user'    => 'root',
        'pw'      => 'qwe123',
        'host'    => 'localhost',
        'db'      => 'cohcollege',
        'prefix'  => 'nano_'
    ),
  ),
  'live' => array(
    'url'         => $url,
    'root'        => __DIR__,
    'mysql'       => array(
        'user'    => '',
        'pw'      => '',
        'host'    => '',
        'db'      => '',
        'prefix'  => ''
    )
  ),
);

echo json_encode($json);
?>