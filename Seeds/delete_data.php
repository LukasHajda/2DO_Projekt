<?php

include 'config.php';

$DB->delete_activities();
$DB->delete_users();

echo "\e[0;32mData successfully deleted\e[0m\n";