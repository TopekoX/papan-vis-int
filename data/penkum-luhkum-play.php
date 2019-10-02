<?php

$tahun5 = date('Y');
$tahun4 = $tahun5 - 1;
$tahun3 = $tahun4 - 1;
$tahun2 = $tahun3 - 1;
$tahun1 = $tahun2 - 1;

include_once '../visual/konfig.php';

$penkum = mysqli_query($con, "SELECT IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-03-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-12-31')) AS '$tahun1',
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31')) AS '$tahun2',
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31')) AS '$tahun3',
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31')) AS '$tahun4',
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31')) AS '$tahun5' FROM visual.penkum");

$luhkum = mysqli_query($con, "SELECT IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-03-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-12-31')) AS '$tahun1',
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31')) AS '$tahun2',
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31')) AS '$tahun3',
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31')) AS '$tahun4',
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31')) AS '$tahun5' FROM visual.luhkum");



?>

<script  type="text/javascript">

		var ctx = document.getElementById("playpenluhperth").getContext("2d");
		var data= {
							labels: [<?php echo '"'.$tahun1.'","'.$tahun2.'","'.$tahun3.'","'.$tahun4.'","'.$tahun5.'"' ?>],
							datasets: [
							{
								label: "Penyuluhan Hukum",
								backgroundColor: "green",
								data: [<?php
								   while ($p = mysqli_fetch_array($luhkum)) {
									 echo '"' . $p[$tahun1] . '","'. $p[$tahun2] . '","' . $p[$tahun3] . '","' . $p[$tahun4] . '","' . $p[$tahun5] . '"';}?>]
							},
							{
								label: "Penerangan Hukum",
								backgroundColor: "red",
								data: [<?php
										while ($p = mysqli_fetch_array($penkum)) {
									  echo '"' . $p[$tahun1] . '","'. $p[$tahun2] . '","' . $p[$tahun3] . '","' . $p[$tahun4] . '","' . $p[$tahun5] . '"';}?>]
							}
							]
							};

		var myBarChart = new Chart(ctx, {
							type: 'bar',
							data: data,
							options: {
							barValueSpacing: 20,
							scales: {
								yAxes: [{
										ticks: {
												min: 0,
										}
								}],
								xAxes: [{
														gridLines: {
																color: "rgba(0, 0, 0, 0)",
														}
												}]
								}
						}
					});
</script>
