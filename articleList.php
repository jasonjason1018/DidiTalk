<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/style.css">
<?php require_once "include/head.inc.php"; ?>
<body>
  <?php require_once "include/header.inc.php"; ?>

  <main>
    <section class="latest-posts" id="articleList">
      <h2>文章列表</h2>
      <ul id="articleNews">
        
      </ul>
    </section>
  </main>
  <footer>
    <nav id="pageination">
      <p>&copy; 2023 論壇</p>
      <ul class="pagination">
        <li><a href="javascript:void(0)" class="disabled">&laquo;</a></li>
        <li><a href="javascript:void(0)" class="active">1</a></li>
        <li><a href="javascript:void(0)">2</a></li>
        <li><a href="javascript:void(0)">3</a></li>
        <li><a href="javascript:void(0)">4</a></li>
        <li><a href="javascript:void(0)">5</a></li>
        <li><a href="javascript:void(0)">&raquo;</a></li>
      </ul>
    </nav>
  </footer>

</body>
<script>
  $(document).ready(function(){
    ajaxFunction("articleListSql", "articleNews");
  });
</script>
<script type="text/javascript" src="js/global.js"></script>
</html>
