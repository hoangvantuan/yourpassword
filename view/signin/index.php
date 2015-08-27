<?php
get_head();
?>
<!-- Sign in layout-->
<div class="container">
  <div class="row">
      <div class="panel panel-info">
         <div class="panel-heading">
            <h3 class="panel-title">Signin</h3>
         </div>
         <div class="panel-body">
            <div class="error_signin col-md-4 col-md-offset-3"></div>
            <div class="col-md-4 col-md-offset-3">
               <form role="form" method="post" action="" class="signin">
             <div class="form-group">
              <label for="username" class="control-label">Username:</label>
              <input type="text" name="username" class="form-control" id="username" maxlength="25" placeholder="Enter username here" required="required"/>
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Password:</label>
              <input type="password" class="form-control" name="password" id="password" minlength="6" placeholder="Enter password here" required="required" />
            </div>                       
                  <button type="submit" class="btn btn-default" name="submit">Signin</button>
               </form>
            </div>
         </div>
      </div>
  </div>
</div>

<?php
get_footer();
?>