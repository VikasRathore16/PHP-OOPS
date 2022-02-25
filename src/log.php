<?php
//Destroying session file
session_start();
session_destroy();
header('location: index.php');
