<?php
  get_head();
  ?>
<div class="container">
  <p class="delete text-info"></p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Password</th>
        <th>Description</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
      <!-- Show list data-->
      <?php
        foreach ($data as $key => $value):
        ?>
      <tr>
        <td><?php
          echo $value['password'];
          ?></td>
        <td><?php
          echo $value['description'];
          ?></td>
        <td><a href="#" class="<?php
          echo $value['id'];
          ?>" onclick="deletePassword(<?php
          echo $value['id'];
          ?>,this);">Delete</a></td>
      </tr>
      <?php
        endforeach;
        ?>
    </tbody>
  </table>
  <!-- From generator password form-->
  <form action="" method="POST" role="form" class="gen">
    <legend>Generator</legend>
    <div class="form-group">
      <label for="">Description</label>
      <textarea name="description" id="inputDescription" class="form-control" rows="3" required="required" placeholder="URL or address you need generator password"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Generator</button>
  </form>
</div>
<?php
  get_footer();
  ?>