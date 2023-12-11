<?php 

session_start();
session_destroy();

header("Location: ../Frontend/welcomepage.html");

?>