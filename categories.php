<?php
  include_once("templates/header.php");

  if (isset($_GET['category'])) {
    $currentCategory;

    foreach($categories as $category) {
      if ($category['category'] == $_GET['category']) {
        $currentCategory = $category;
      }
    }

  }
?>

<main id="post-container">
  <div id="content-container">
    <h1 id="main-title"><?= $currentCategory['title'] ?></h1>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentCategory['img'] ?>" alt="<?= $currentCategory['title'] ?>" />
    </div>
    <p class="post-content"><?= $currentCategory['description'] ?></p>

  </div>
  <aside id="nav-container">
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category) : ?>
        <li>
          <a class="tag" href="<?= $BASE_URL ?>categories.php?category=<?= $category['category']?>" > <?= $category['name'] ?> </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>
<?php
  include_once("templates/footer.php")
?>