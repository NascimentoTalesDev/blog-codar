<?php
  include_once("templates/header.php");
//   print_r($posts);
?>
  <main>
    <div id="title-container">
      <h1>Página Home</h1>
      <p>O seu blog de programação</p>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $post): ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>" />
                <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id']?> "><?= $post['title']?></a>
                </h2>
                <p class="post-description"><?= $post['description']?></p>
                <ul class="tags-container">
                    <?php foreach($post['tags'] as $tag): ?>
                        <li>
                            <a class="tag" href="<?= $BASE_URL ?>tag.php?tag=<?= $tag?>" > <?= $tag?> </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
  </main>
<?php
  include_once("templates/footer.php")
?>
