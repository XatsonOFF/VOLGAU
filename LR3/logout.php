<?php
session_start();
session_destroy();
header('Location: ../LR3/index.php');
