<?php
require_once 'model.php';

$note = get_note_by_id($_GET['id']);

require 'views/show.view.php';
