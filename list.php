<?php
require_once 'model.php';

$notes = get_all_notes();

require 'views/list.view.php';
?>
