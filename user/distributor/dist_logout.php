<?php

session_start();
session_destroy();

header('location: dist_login.php');