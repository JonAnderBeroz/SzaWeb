<?php
  include'../php/sessionStarter.php';
?>
<?php
include'../php/userValidation.php';
?>
<!DOCTYPE html>
<html lang="eu">
<?php include'../html/head.html'?>
<body>
<aside class="sidebar">
    <ul>
      <li ><p id="email"><?php echo $_SESSION['email']; ?></p></li>
      <li><button onclick="logout()">Log Out</button></li>
    </ul> 
    <nav class="nav">
      <ul>
        <li class="active"><a href="Tasks.php" id="1">Eginkizunak </a></li>
        <li><a href="importantTask.php" id="2">Garrantzitsuak </a></li> 
      </ul>
    </nav>
  </aside>
  <section class="container">
    <?php include'../php/printTaskFromXml.php'?>
  </section>
  <script src="../js/taskFunctionalities.js"></script>
  <script src="../js/logout.js"></script>
  <script src="../js/addTask.js"></script>
  <script src="../js/questionCounter.js"></script>
  <script src="../js/importantquestionCounter.js"></script>
</body>
</html>