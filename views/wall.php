<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Wall from scratch</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>My Wall</h1>
  <form action="" method="post">
    <input type="text" name="content">
    <button type="submit">Add</button>
  </form>

  <div>
    <ul>
    <?php foreach($contents as $content){?>
        <li><?php echo $content['content']; ?></li>
    <?php }?>
    <ul>
  </div>

</body>