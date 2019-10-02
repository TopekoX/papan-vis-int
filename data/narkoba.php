<?php

include_once '../visual/konfig.php';

$tahunini = date('Y');
$tahunawal = $tahunini - 4;

$sqlnarkoba = mysqli_query($con, "SELECT * FROM narkoba where Tahun >= '$tahunawal' AND Tahun <= '$tahunini' ORDER BY Tahun");
?>

<script  type="text/javascript">

	var ctx = document.getElementById("grafiknarkoba").getContext("2d");
	var data = {
						labels: [
							<?php while ($p = mysqli_fetch_array($sqlnarkoba)) {
								 echo '"' . $p['Tahun'] . '",';}?>
						],
						datasets: [
							<?php
								mysqli_data_seek($sqlnarkoba, 0);
							?>

						{
							label: "Kasus Perkara Narkoba",
							backgroundColor: "green",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlnarkoba)) {
									 echo '"' . $p['Jumlah'] . '",';}?>
							]
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

<?php
	mysqli_data_seek($sqlnarkoba, 0);
?>

<script  type="text/javascript">

	var ctx = document.getElementById("grafiklinenarkoba").getContext("2d");
	var data = {
						labels: [
							<?php while ($p = mysqli_fetch_array($sqlnarkoba)) {
								 echo '"' . $p['Tahun'] . '",';}?>
						],


						datasets: [
							<?php
								mysqli_data_seek($sqlnarkoba, 0);
							?>

						{
							label: "Kasus Perkara Narkoba",
							fill: false,
							lineTension: 0.1,
							backgroundColor: "rgba(70, 173, 44, 0.9)",
							borderColor: "rgba(70, 173, 44, 0.9)",
							pointHoverBackgroundColor: "rgba(70, 173, 44, 0.9)",
							pointHoverBorderColor: "rgba(70, 173, 44, 0.9)",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlnarkoba)) {
									 echo '"' . $p['Jumlah'] . '",';}?>
							]
						}
						]
						};


	var myBarChart = new Chart(ctx, {
						type: 'line',
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

<?php
	mysqli_data_seek($sqlnarkoba, 0);
?>

<script  type="text/javascript">

	var ctx = document.getElementById("grafiknarkoba-play").getContext("2d");
	var data = {
						labels: [
							<?php while ($p = mysqli_fetch_array($sqlnarkoba)) {
								 echo '"' . $p['Tahun'] . '",';}?>
						],
						datasets: [
							<?php
								mysqli_data_seek($sqlnarkoba, 0);
							?>

						{
							label: "Kasus Perkara Narkoba",
							backgroundColor: "green",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlnarkoba)) {
									 echo '"' . $p['Jumlah'] . '",';}?>
							]
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

<?php
	mysqli_data_seek($sqlnarkoba, 0);
?>

<script  type="text/javascript">

	var ctx = document.getElementById("grafiklinenarkoba-play").getContext("2d");
	var data = {
						labels: [
							<?php while ($p = mysqli_fetch_array($sqlnarkoba)) {
								 echo '"' . $p['Tahun'] . '",';}?>
						],


						datasets: [
							<?php
								mysqli_data_seek($sqlnarkoba, 0);
							?>

						{
							label: "Kasus Perkara Narkoba",
							fill: false,
							lineTension: 0.1,
							backgroundColor: "rgba(70, 173, 44, 0.9)",
							borderColor: "rgba(70, 173, 44, 0.9)",
							pointHoverBackgroundColor: "rgba(70, 173, 44, 0.9)",
							pointHoverBorderColor: "rgba(70, 173, 44, 0.9)",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlnarkoba)) {
									 echo '"' . $p['Jumlah'] . '",';}?>
							]
						}
						]
						};


	var myBarChart = new Chart(ctx, {
						type: 'line',
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
