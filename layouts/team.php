<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
  <?php include "../components/site-footer.php"; ?>
  <?php include "../components/site-header.php"; ?>
</head>
<body>
  <div id="site-container">
    <main id="site-body">
      <section id="site-content">
       <?php

       function names($nr1="Nimetu", $nr2="Puudub", $nr3="Puuduvad"){
           echo '<div class="team-member">
               <h2 class="member-name">'.$nr1.'</h2>
               <div class="member-info"><span>E-mail: </span><a href="mailto:'.$nr2.'">'.$nr2.'</a></div>
               <div class="member-info"><span>Huvialad: </span>'.$nr3.'</div>
               </div>';
       };

       foreach ($members as $value){

            names($value["name"], $value["email"], $value["huvis"]);
       };
        ?>
      </section>
    </main>
  </div>
</body>
</html>