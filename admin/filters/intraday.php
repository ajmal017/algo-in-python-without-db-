<?php

$string = file_get_contents('../data/filters/intraday.json');
$arr = json_decode($string,true);?>



<!-- BTST BUY  Confirmed Filter -->
<table class="table table-bordered table-hover table-responsive table-striped">
<caption class="bg-primary text-center">BTST BUY <strong> Confirmed  </strong>Filter</caption>
<tr >
<th>Exchange</th>
<th>Symbol</th>
<th>token</th>
<th>Higher Time</th>
<th>Lower Time</th>
<th>Chart</th>
</tr>
<?php   
$exchange = 'NSE';
$nse_conf_buy = $arr[$exchange]['confirmed']['BUY'];
foreach($nse_conf_buy as $data){
    $symbol= $data['symbol'];
    $token = $data['token'];
    $higher_time = substr($data['timestamp-higher'],0,19);
    $lower_time =substr($data['timestamp-lower'],0,19);        ?>
        <tr>
            <td><?php echo $exchange;?></td>
            <td class="bg-success"><?php echo $symbol;?></td>
            <td><?php echo $token;  ?></td>
            <td><?php echo $higher_time;  ?></td>
            <td><?php echo $lower_time;  ?></td>
            <td><a href="./charts/<?php echo $exchange.':'.$symbol.'.php';?>" target="_blank"><?php echo $symbol;?> </a> </td>
        </tr>
<?php } ?>
</table>


<!-- BTST SELL  Confirmed Filter -->
<table class="table table-bordered table-hover table-responsive table-striped">
<caption class="bg-danger text-center">BTST SELL <strong> Confirmed  </strong> Filter</caption>
<tr >
<th>Exchange</th>
<th>Symbol</th>
<th>token</th>
<th>Higher Time</th>
<th>Lower Time</th>
<th>Chart</th>
</tr>
<?php   
$exchange = 'NSE';
$nse_conf_buy = $arr[$exchange]['confirmed']['SELL'];
foreach($nse_conf_buy as $data){
    $symbol= $data['symbol'];
    $token = $data['token'];
    $higher_time = substr($data['timestamp-higher'],0,19);
    $lower_time =substr($data['timestamp-lower'],0,19);        ?>
        <tr>
            <td><?php echo $exchange;?></td>
            <td class="bg-danger"><?php echo $symbol;?></td>
            <td><?php echo $token;  ?></td>
            <td><?php echo $higher_time;  ?></td>
            <td><?php echo $lower_time;  ?></td>
            <td><a href="./charts/<?php echo $exchange.':'.$symbol.'.php';?>" target="_blank"><?php echo $symbol;?> </a> </td>
        </tr>
<?php } ?>
</table>



<!-- BTST BUY Unonfirmed Filter -->
<table class="table table-bordered table-hover table-responsive table-striped">
<caption class="bg-primary text-center">BTST BUY <strong> Unonfirmed  </strong> Filter</caption>
<tr >
<th>Exchange</th>
<th>Symbol</th>
<th>token</th>
<th>Higher Time</th>
<th>Lower Time</th>
<th>Chart</th>
</tr>
<?php   
$exchange = 'NSE';
$nse_conf_buy = $arr[$exchange]['unconfirmed']['BUY'];
foreach($nse_conf_buy as $data){
    $symbol= $data['symbol'];
    $token = $data['token'];
    $higher_time = substr($data['timestamp-higher'],0,19);
    $lower_time =substr($data['timestamp-lower'],0,19);        ?>
        <tr>
            <td><?php echo $exchange;?></td>
            <td class="bg-danger"><?php echo $symbol;?></td>
            <td><?php echo $token;  ?></td>
            <td><?php echo $higher_time;  ?></td>
            <td><?php echo $lower_time;  ?></td>
            <td><a href="./charts/<?php echo $exchange.':'.$symbol.'.php';?>" target="_blank"><?php echo $symbol;?> </a> </td>
        </tr>
<?php } ?>
</table>







<!-- BTST SELL Unonfirmed Filter -->
<table class="table table-bordered table-hover table-responsive table-striped">
<caption class="bg-info text-center">BTST SELL <strong> Unonfirmed  </strong> Filter</caption>
<tr >
<th>Exchange</th>
<th>Symbol</th>
<th>token</th>
<th>Higher Time</th>
<th>Lower Time</th>
<th>Chart</th>
</tr>
<?php   
$exchange = 'NSE';
$nse_conf_buy = $arr[$exchange]['unconfirmed']['SELL'];
foreach($nse_conf_buy as $data){
    $symbol= $data['symbol'];
    $token = $data['token'];
    $higher_time = substr($data['timestamp-higher'],0,19);
    $lower_time =substr($data['timestamp-lower'],0,19);        ?>
        <tr>
            <td><?php echo $exchange;?></td>
            <td class="bg-danger"><?php echo $symbol;?></td>
            <td><?php echo $token;  ?></td>
            <td><?php echo $higher_time;  ?></td>
            <td><?php echo $lower_time;  ?></td>
            <td><a href="./charts/<?php echo $exchange.':'.$symbol.'.php';?>" target="_blank"><?php echo $symbol;?> </a> </td>
        </tr>
<?php } ?>
</table>
