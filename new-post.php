<?php require('./init.php'); ?>
<?php require('./templates/header.php'); ?>
<?php require('./inc/post.php'); ?>

<?php
$error = false;
$title = "";
$excerpt = "";
$content = "";

if (isset($_POST['submit-new-post'])) {
  $title = $_POST['title'];
  $excerpt = $_POST['excerpt'];
  $content = $_POST['content'];

  if (empty($title) || empty($content)) {
    $error = true;
  } else {
    insert_post($title, $excerpt, $content); 
  }
}

?>

<h2> Crear una nueva entrada </h2>

<?php if ($error): ?>
  <div class="error">
    Se ha encontrado un error en el formulario
  </div>
<?php endif; ?>


<form method="post">
  <label for="title">Título</label>
  <input type="text" name="title" id="title" value="<?php echo $title; ?>" />

  <label for="excerpt">Extracto</label>
  <input type="text" name="excerpt" id="excerpt" value="<?php echo $excerpt; ?>" />

  <label for=" content">Contenido</label>
  <textarea name="content" id="content" cols="30" rows="30"> <?php echo $content; ?> </textarea>

  <p>
    <input type="submit" name="submit-new-post" id="title" value="New post" />
  </p>
</form>

<?php require('./templates/footer.php'); ?>