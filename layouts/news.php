<!DOCTYPE html>
<html>
<head>
  <?php include "../components/site-data.php"; ?>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <article class="blog-post">
          <?php
          $i = 0;
            foreach ($blog_news as $news){
                if(++$i > 2) break;
                echo '<article><h2 class="post-title">'.$news["post_title"].'</h2>';
                echo '<div class="post-excerpt">'.$news["post_excerpt"].'</div>';
                echo '<div class="post-body">'.$news["post_body"].'</div></article>';
            };
          ?>
        </article>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
