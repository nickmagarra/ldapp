<?php

if (!$_SESSION) {
	echo 'Not authorized';
	include_once 'auth/auth.php';
	exit;
}
?>
<!DOCTYPE html>
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
    <section>
      <h1>Congratulations!</h1>
    </section>
  </body>
</html>