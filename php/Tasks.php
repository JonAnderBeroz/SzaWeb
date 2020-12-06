<!DOCTYPE html>
<html lang="eu">
<?php include'../html/head.html'?>
<body>
<aside class="sidebar">
    <nav class="nav">
      <ul>
        <li class="active"><a href="Tasks.php">Eginkizunak</a></li>
        <li><a href="importantTask.php">Garrantzitsuak</a></li>
      </ul>
    </nav>
  </aside>
  <section class="container">
    <?php include'../php/printTaskFromXml.php'?>
  </section>
  <script src="../js/taskFunctionalities.js"></script>
</body>
</html>