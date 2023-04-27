<link rel="stylesheet" href="css/article.css">
<link rel="stylesheet" href="css/style.css">
<?php require_once "include/head.inc.php"; ?>
<body>
  <?php require_once "include/header.inc.php"; ?>
  
  <main>
    <article id="article">

    </article>
  </main>
  
  <footer>
    <nav id="pageination">
      <p>&copy; 2023 論壇</p>
      <ul class="pagination">
        <li><a href="#" class="disabled">&laquo;</a></li>
        <li><a href="#" class="active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </nav>
  </footer>
</body>
<script type="text/javascript">
  $(document).ready(function(){
    ajaxFunction("articleContent", "article", "<?php echo $_GET['id'];?>");
  });
</script>

