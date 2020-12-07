<?php
  include'../php/sessionStarter.php';
  include'../php/userValidation.php';
?>
<!DOCTYPE html>
<html lang="eu">
<?php include'../html/head.html'?>
<body>
<aside class="sidebar">
    <ul>
      <li ><p id="email"><?php echo $_SESSION['email'];?></p></li>
      <li><button onclick="logout()">Log Out</button></li>
    </ul>
    <nav class="nav">
      <ul>
        <li><a href="Tasks.php">Eginkizunak</a></li>
        <li class="active"><a href="importantTask.php">Garrantzitsuak</a></li>
      </ul>
    </nav>
  </aside>
  <section class="container">
    <?php include'../php/printImportantTaskFromXml.php'?>
  </section>
  <script src="../js/taskFunctionalities.js"></script>
</body>
</html>