<?php
include 'auth/index.php'; 
include 'conf/ldap_auth.php';
?>

<?php if(AUTH) {
header('Content-type: text/html;charset=utf-8');

    echo $user['name'];

} else { ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
    section {
    position: absolute;
    text-align: center;
    padding: 10px;
    top: 20%;
    left: 45%;
    font-family: Arial;
    font-size: 10pt;
    background: #DCF0FF;
    border: 3px solid #DCF0FF;
    border-radius: 15px;
    }
    input {
    text-align: center;
    border-radius: 5px;
    padding: 5px;
    }
    </style>
  </head>
  <body>
    <section class="auth_form">
      <h2>Auth</h2>
      <form action="auth/index.php" method="post">
        <input required autofocus type="text" id="webLogin" name="login" placeholder="login"><br><br>
        <input required type="password" id="webPass" name="password" placeholder="password"><br><br>
        <input type="submit" value="Enter">
      </form>
    </section>
  </body>
</html>
<?php } ?>