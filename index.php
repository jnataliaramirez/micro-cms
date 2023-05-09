<?php require('./init.php'); ?>
<?php require('./templates/header.php'); ?>
<?php require('./inc/post.php'); ?>

<?php

$all_posts=get_all_post();

$post_found=false;
if (isset($_GET['view'])) {
    $post_found = get_post($_GET['view']);
    if ($post_found) {
        $all_posts = [$post_found];
    };
};
?>

<div class="posts">
    <?php foreach ($all_posts as $post): ?>
        <article class="post">
            <header>
                <a href="?view=<?php echo $post['id']; ?> ">
                    <h2 class=" post-title">
                        <?php echo $post["title"] ?>
                    </h2>
                </a>
            </header>
            <div class="post-content">
                <?php if ($post_found): ?>
                    <?php echo $post["content"] ?>
                <?php else: ?>
                    <?php echo $post["excerpt"] ?>
                <?php endif ?>
                <p></p>
            </div>
            <footer>
                <span class="post-date">
                    Publicada en:
                    <?php echo date('d M Y', strtotime($post["published_on"])); ?>
                </span>
            </footer>
        </article>
    <?php endforeach ?>
</div>

<?php require('./templates/footer.php'); ?>