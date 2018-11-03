<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coins</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<style>
	body{background: #32383e;}
	#ortala{width:80%;margin:3% auto 0 auto;}
</style>
<body>
<div id="ortala">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Birim Adı</th>
      <th scope="col">Fiyat</th>
      <th scope="col">Değişim (24.s)</th>
    </tr>
  </thead>
<tbody>
<?php
$api = file_get_contents("https://api.coinmarketcap.com/v2/ticker/?convert=TRY&limit=10");
$veri = json_decode($api,true);
foreach($veri['data'] as $coin) {
echo '<tr><th scope="row">'.$coin['rank'].'</th><td>'.$coin['name']."</td><td>".number_format($coin['quotes']['TRY']['price'], 2)." TRY</td><td>%".number_format($coin['quotes']['TRY']['percent_change_24h'], 2)."</td></tr>";
}
?>
</tbody>
</table>
</div>
</body>
</html>