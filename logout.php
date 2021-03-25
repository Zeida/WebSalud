<?php
include_once 'presentation.class.php';
include_once 'data_access.class.php';

User::logout();
header('Location:index.php');

