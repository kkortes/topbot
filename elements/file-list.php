<?
  $path = __DIR__.'/../';
  $relativePath = $path.'*';

  $pagetree = search($relativePath, array(), 'root');

  echo '<ul class="non-dotted file-list">';
  echo renderList($pagetree['root']);
  echo '</ul>';
?>