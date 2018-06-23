<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<div class="p-3 mb-2 bg-dark text-white">

<?php

$data = file_get_contents("http://worldcup.sfg.io/teams/group_results");
$data = json_decode($data,true);
echo "<h1>TABELA COPA DO MUNDO 2018 - RÚSSIA</h1>";


?>

<table class="table table-hover table-dark">

    <?php
foreach ($data as $grupos) {
    $grupo = $grupos["group"]["letter"];
    $selecoes = $grupos["group"]["teams"];
    ?>
    <thead>
      <tr>
          <td colspan="8"><?php echo "<h1>GRUPO $grupo</h1>"; ?></td>
      </tr>

      <tr>
        <th scope="col">seleção</th>
        <th scope="col">pontos</th>
        <th scope="col">vitórias</th>
        <th scope="col">empates</th>
        <th scope="col">derrotas</th>
        <th scope="col">partidas</th>
        <th scope="col">gols pro</th>
        <th scope="col">gols contra</th>
        <th scope="col">saldo</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($selecoes as $selecao) :
        ?>
        <tr>
            <th scope="row"><?php echo $selecao["team"]["country"]; ?></th>
            <td><?php echo $selecao["team"]["points"]; ?></td>
            <td><?php echo $selecao["team"]["wins"]; ?></td>
            <td><?php echo $selecao["team"]["draws"]; ?></td>
            <td><?php echo $selecao["team"]["losses"]; ?></td>
            <td><?php echo $selecao["team"]["games_played"]; ?></td>
            <td><?php echo $selecao["team"]["goals_for"]; ?></td>
            <td><?php echo $selecao["team"]["goals_against"]; ?></td>
            <td><?php echo $selecao["team"]["goal_differential"]; ?></td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
    <?php
}
  ?>
</table>
</div>