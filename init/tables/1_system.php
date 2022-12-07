<?php

use Sequel\Tablier;




$sys_tables = new Tablier('_sys_tables');
$sys_tables->int('id')->primary();
$sys_tables->varchar('name', 50);
$sys_tables->timestamp('created_at')->default();
$sys_tables->build();

/*

$t = new Tablier('_sys_cron_scheduled');

$t->int('id')->primary();

$t->text('job');

$t->int('run_at', 30)->default(0);
$t->timestamp('created_at')->default();

$t->build();






$t = new Tablier('_sys_cron');

$t->int('id')->primary();

$t->text('job');

$t->int('interval', 30)->default('86400');
$t->int('last_ran', 12);

$t->build();




$t = new Tablier('_sys_sendry_scheduled');

$t->int('id')->primary();

$t->varchar('from', 50);
$t->varchar('recepient', 50);
$t->varchar('subject', 100);
$t->text('contents');

$t->int('order', 2)->default(50);
$t->timestamp('created_at')->default();

$t->build();

*/