<?php

use Sequel\Sequel;

$teams = Sequel::select('teams')
->paginate($this->path)
->do();

Sequel::update('teams')->where('id', '=', $id)->mass($a)->do();
Sequel::insert('teams')->mass($a)->do();