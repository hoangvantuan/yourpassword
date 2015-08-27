<!-- BEGIN: Navigation -->
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Your Password</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-right navbar-nav nav-center">
        <li >
        <?php if(isset($_SESSION['username'])): ?>
          <a href="index.php?controller=logout">Logout</a>
        <?php else: ?>
          <a href="index.php?controller=signin">Login</a>
        <?php endif ?>
        </li>
        <li>
          <?php if(!isset($_SESSION['username'])): ?>
            <a href="index.php?controller=signup">Signup</a>
          <?php endif ?>         
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- END: Navigation -->