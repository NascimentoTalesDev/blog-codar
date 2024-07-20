<?php
  include_once("templates/header.php");

  if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;
    
    foreach ($posts as $post){
        if($post['id'] == $postId){
          $currentPost = $post;
        }
    }
  }
?>

<main id="post-container">
  <div id="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>" />
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus sequi blanditiis commodi, eum explicabo ducimus asperiores, laudantium minima necessitatibus doloribus ipsum vel error aspernatur sapiente aut atque aliquid amet praesentium?
      Sunt eos aut dignissimos praesentium hic nihil suscipit molestiae eius cum harum velit illum aliquam voluptatibus expedita vitae ea perspiciatis consequuntur debitis ipsum, nostrum quam! Repudiandae beatae maxime fuga architecto.
      At suscipit illum eveniet saepe. Est voluptatum distinctio ex delectus minima corrupti harum nesciunt saepe consequatur? Sit modi voluptates dolore temporibus doloribus aliquam officia dolorum recusandae qui, iusto voluptatibus at?
      Odit rerum nemo, quae cum architecto sint modi, nihil repellendus consequuntur, omnis debitis sapiente minima commodi illo! Fugit harum, amet ipsam asperiores hic, dolores voluptas maiores quia libero dignissimos earum.
      Nam rem quis veniam atque saepe illum repudiandae est assumenda nobis praesentium! Itaque recusandae nemo nesciunt nostrum commodi natus accusamus. Distinctio temporibus sed dolorem et vitae esse explicabo nam quod.
    </p>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus sequi blanditiis commodi, eum explicabo ducimus asperiores, laudantium minima necessitatibus doloribus ipsum vel error aspernatur sapiente aut atque aliquid amet praesentium?
      Sunt eos aut dignissimos praesentium hic nihil suscipit molestiae eius cum harum velit illum aliquam voluptatibus expedita vitae ea perspiciatis consequuntur debitis ipsum, nostrum quam! Repudiandae beatae maxime fuga architecto.
      At suscipit illum eveniet saepe. Est voluptatum distinctio ex delectus minima corrupti harum nesciunt saepe consequatur? Sit modi voluptates dolore temporibus doloribus aliquam officia dolorum recusandae qui, iusto voluptatibus at?
      Odit rerum nemo, quae cum architecto sint modi, nihil repellendus consequuntur, omnis debitis sapiente minima commodi illo! Fugit harum, amet ipsam asperiores hic, dolores voluptas maiores quia libero dignissimos earum.
      Nam rem quis veniam atque saepe illum repudiandae est assumenda nobis praesentium! Itaque recusandae nemo nesciunt nostrum commodi natus accusamus. Distinctio temporibus sed dolorem et vitae esse explicabo nam quod.
    </p>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus sequi blanditiis commodi, eum explicabo ducimus asperiores, laudantium minima necessitatibus doloribus ipsum vel error aspernatur sapiente aut atque aliquid amet praesentium?
      Sunt eos aut dignissimos praesentium hic nihil suscipit molestiae eius cum harum velit illum aliquam voluptatibus expedita vitae ea perspiciatis consequuntur debitis ipsum, nostrum quam! Repudiandae beatae maxime fuga architecto.
      At suscipit illum eveniet saepe. Est voluptatum distinctio ex delectus minima corrupti harum nesciunt saepe consequatur? Sit modi voluptates dolore temporibus doloribus aliquam officia dolorum recusandae qui, iusto voluptatibus at?
      Odit rerum nemo, quae cum architecto sint modi, nihil repellendus consequuntur, omnis debitis sapiente minima commodi illo! Fugit harum, amet ipsam asperiores hic, dolores voluptas maiores quia libero dignissimos earum.
      Nam rem quis veniam atque saepe illum repudiandae est assumenda nobis praesentium! Itaque recusandae nemo nesciunt nostrum commodi natus accusamus. Distinctio temporibus sed dolorem et vitae esse explicabo nam quod.
    </p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach($currentPost['tags'] as $tag) : ?>
        <li>
          <a class="tag" href="<?= $BASE_URL ?>tag.php?tag=<?= $tag?>" > <?= $tag?> </a>
        </li>
      <?php endforeach; ?>
    </ul>
    
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