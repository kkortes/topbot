<? include_once "functions.php"; ?>
<!DOCTYPE html>
<?
  r('header');

  r('pages/'.(isset($_GET['page']) ? $_GET['page'] : 'index'));

  r('footer');
?>