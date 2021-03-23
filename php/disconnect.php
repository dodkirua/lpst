<?php
$_SESSION = [];
session_destroy();

header("../index.php");