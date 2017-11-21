<?php
include 'boot/Start.php';

session_start();

Start::init();

Start::route();
echo 111;die;

