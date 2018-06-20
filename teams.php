<?php

$data = file_get_contents("http://worldcup.sfg.io/teams");
$data = json_decode($data,true);
foreach ($data as $team){
	echo "{$team['country']} - {$team['fifa_code']} - GRUPO {$team['group_letter']}\n";

}

