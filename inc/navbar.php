<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">WIND</a>
    </div> <!-- Collect the nav links, forms, and other content for toggling -->
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <?php
          $sql = " SELECT * FROM `categories` ";
          $categories = mysqli_query($con , $sql);
          while( $row = mysqli_fetch_assoc($categories) ):
            $id =$row['id'];
            $name=$row['name'];                 
        ?>
        <li>
          <a href="by_category.php?cid=<?=$id?>"><?=$name?></a>
        </li>
        <?php endwhile; ?>
      </ul>

    </div> <!-- /.navbar-collapse -->
  </div> <!-- /.container -->
</nav>