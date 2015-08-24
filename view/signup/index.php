<?php get_head(); ?>

<div class="container">
	<div class="row">
      <div class="panel panel-info">
         <div class="panel-heading">
            <h3 class="panel-title">Signup</h3>
         </div>
         <div class="panel-body">
            <div class="error_signup"></div>
            <div class="col-md-4 col-md-offset-3">
               <form role="form" method="post" action="" class="signup">
             <div class="form-group">
              <label for="username" class="control-label">Username:</label>
              <input type="text" name="username" class="form-control" id="username" placeholder="Enter username here" required="required"/>
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Password:</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password here" required="required" />
            </div>                       
                  <button type="submit" class="btn btn-default" name="submit">Signup</button>
               </form>
            </div>
         </div>
      </div>
  </div>
</div>

<?php get_footer(); ?>