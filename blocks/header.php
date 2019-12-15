<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
  <a class="btn btn-light my-0 mr-md-auto font-weight-normal" href="/">Main</a>

    <nav class="my-2 my-md-0 mr-md-3">
      <!-- <a class="p-2 text-dark" href="#">Main</a>
      <a class="p-2 text-dark" href="#">Contacts</a> -->
    </nav>
    <?php
      if($_COOKIE['user'] == 'yes'):
     ?>
     <a class="btn btn-outline-primary" href="auth.php">User profile</a>
   <?php else: ?>
    <a class="btn btn-outline-primary" href="/auth.php">Login</a>
  <?php endif; ?>
</div>
