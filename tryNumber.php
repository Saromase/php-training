<?php
include 'Fork.class.php';
session_start();
$fork = $_SESSION['Fork'];
$input = $_POST['input'];
$fork->tryNumber($input);
header('location: index.php');
