<!DOCTYPE html>
<html>
<head>
    <LINK href="../stylesheets/main.css" rel="stylesheet" type="text/css">
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <!--  Sisesta siia kood -->
          <?php
$rand_nr = rand(100, 200);
          if ($rand_nr>150){
          echo "Juhuslik number ".$rand_nr." on suurem kui 150";}
          else
          echo "Juhuslik number ".$rand_nr." on väiksem kui 150."
           ?>
        <h2>Juhuslik pilt</h2>
        <!--  Sisesta siia kood -->

          <?php
            echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.rand(1,12).'.jpg">'
          ?>

        <h2>Kõikide piltide väljastamine</h2>
        <!--  Sisesta siia kood -->
          <?php
            $i=1;
          while ($i <= 12):
            echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.$i.'.jpg">';
              $i++;
          endwhile;
          ?>

      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>