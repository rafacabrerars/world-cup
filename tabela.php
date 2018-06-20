<?php

$data = file_get_contents("http://worldcup.sfg.io/teams/group_results");
$data = json_decode($data,true);
echo "<h1>TABELA</h1>";
foreach ($data as $grupos){
  $grupo=$grupos["group"]["letter"];
  $selecoes=$grupos["group"]["teams"];
  echo "<h1>$grupo</h1>";	
  foreach ($selecoes as $selecao){
    echo $selecao["team"]["country"]." ".$selecao["team"]["points"]." ".$selecao["team"]["wins"]." ".$selecao["team"]["draws"]." ".$selecao["team"]["losses"]." ".$selecao["team"]["games_played"]." ".$selecao["team"]["goals_for"]." ".$selecao["team"]["goals_against"]." ".$selecao["team"]["goal_differential"]."<br>";
  }
}


