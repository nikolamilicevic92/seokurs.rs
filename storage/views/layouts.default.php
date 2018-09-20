<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <base href="/">
  <link rel="stylesheet" href="assets/css/core/framework.css">
  <link rel="stylesheet" href="assets/css/main.css">
  
  <!-- <link rel="stylesheet" href="assets/css/rich-text-editor.css"> -->
  <?php foreach($stylesheets as $stylesheet): ?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars( $stylesheet ); ?>.css">
  <?php endforeach; ?>
  <meta name="csrf" value="<?php echo htmlspecialchars( csrf() ); ?>">
  <meta name="keywords" value="<?php echo htmlspecialchars( $page->keywords ); ?>">
  <meta name="description" value="<?php echo htmlspecialchars( $page->description ); ?>">
  <title><?php echo htmlspecialchars( $page->title ); ?></title>
</head>
<body>

  <header>
    <?php require $__includes__ . "includes.nav.php"; ?> 
  </header>

  <main class="<?php echo htmlspecialchars($page->page_name); ?>">
    <?php require $__content__; ?>
  </main>

  <footer>
    <?php require $__includes__ . "includes.footer.php"; ?>
  </footer>

  <script src="assets/js/core/framework.js"></script>
  <script src="assets/js/main.js"></script>
  <?php foreach($scripts as $script): ?>
    <script src="assets/js/<?php echo htmlspecialchars( $script ); ?>.js"></script>
  <?php endforeach; ?>
</body>
</html>