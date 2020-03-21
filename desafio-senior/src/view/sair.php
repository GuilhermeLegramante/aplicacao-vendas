<?php

session_start();
unset($_SESSION['administrador']);
unset($_SESSION['vendedor']);

header("location: login.php");

