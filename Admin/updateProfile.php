<?php
  require_once('../app/session/session.php');
  $s = new Session();
  $s->afterConnection();
?>
<!DOCTYPE html>
<html lang="en">
  <?php
    require_once('template/head.php');
  ?>
  <body>
    <div class="container-scroller">
      <?php
        require_once('template/navbar.php');
      ?>
      <div class="container-fluid page-body-wrapper">
        <?php
          require_once('template/navleft.php');
        ?>
        <div class="main-panel">
          <?php
            if(isset($_GET['page']))
            {
                if($_GET['page'] == "updateInfo")
                {
                    require_once('template/admin/updateInfo.php');
                }
                else
                {
                  if($_GET['page'] == "updatePassword")
                  {
                    require_once('template/admin/updatePassword.php');
                  }
                }
            }
            else
            {
              require_once('template/updateInfo.php');
            }
          ?>
          <?php
            require_once('template/footer.php');
          ?>
        </div>
      </div>
    </div>
    <?php
      require_once('template/js.php');
    ?>
  </body>
</html>