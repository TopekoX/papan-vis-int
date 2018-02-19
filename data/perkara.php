<?php

include_once '../bdi/konfig.php';

$tahunini = date('Y');
$tahunawal = $tahunini - 4;

$sqlkorupsi = mysqli_query($con, "SELECT * FROM korupsi where Tahun >= '$tahunawal' AND Tahun <= '$tahunini' ORDER BY Tahun");
?>

<script  type="text/javascript">

	var ctx = document.getElementById("grafiktipikor").getContext("2d");
	var data = {
						labels: [
							<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Tahun'] . '",';}?>
						],
						datasets: [
							<?php
								mysqli_data_seek($sqlkorupsi, 0);
							?>

						{
							label: "Lid",
							backgroundColor: "green",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
									 echo '"' . $p['Lid'] . '",';}?>
							]
						},

						<?php
							mysqli_data_seek($sqlkorupsi, 0);
						?>

						{
							label: "Dik",
							backgroundColor: "red",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Dik'] . '",';}?>
							 ]
						},

						<?php
							mysqli_data_seek($sqlkorupsi, 0);
						?>

						{
							label: "Tut",
							backgroundColor: "yellow",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Tut'] . '",';}?>
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
	mysqli_data_seek($sqlkorupsi, 0);
?>

<script  type="text/javascript">

	var ctx = document.getElementById("grafiklinetipikor").getContext("2d");
	var data = {
						labels: [
							<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Tahun'] . '",';}?>
						],


						datasets: [
							<?php
								mysqli_data_seek($sqlkorupsi, 0);
							?>

						{
							label: "Lid",
							fill: false,
							lineTension: 0.1,
							backgroundColor: "rgba(70, 173, 44, 0.9)",
							borderColor: "rgba(70, 173, 44, 0.9)",
							pointHoverBackgroundColor: "rgba(70, 173, 44, 0.9)",
							pointHoverBorderColor: "rgba(70, 173, 44, 0.9)",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
									 echo '"' . $p['Lid'] . '",';}?>
							]
						},

						<?php
							mysqli_data_seek($sqlkorupsi, 0);
						?>

						{
							label: "Dik",
							fill: false,
							lineTension: 0.1,
							backgroundColor: "rgba(215, 40, 40, 0.9)",
							borderColor: "rgba(215, 40, 40, 0.9)",
							pointHoverBackgroundColor: "rgba(215, 40, 40, 0.9)",
							pointHoverBorderColor: "rgba(215, 40, 40, 0.9)",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Dik'] . '",';}?>
							 ]
						},

						<?php
							mysqli_data_seek($sqlkorupsi, 0);
						?>

						{
							label: "Tut",
							fill: false,
							lineTension: 0.1,
							backgroundColor: "rgba(253, 203, 44, 0.9)",
							borderColor: "rgba(253, 203, 44, 0.9)",
							pointHoverBackgroundColor: "rgba(253, 203, 44, 0.9)",
							pointHoverBorderColor: "rgba(253, 203, 44, 0.9)",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Tut'] . '",';}?>
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
	mysqli_data_seek($sqlkorupsi, 0);
?>

<script  type="text/javascript">

	var ctx = document.getElementById("grafiktipikor-play").getContext("2d");
	var data = {
						labels: [
							<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Tahun'] . '",';}?>
						],
						datasets: [
							<?php
								mysqli_data_seek($sqlkorupsi, 0);
							?>

						{
							label: "Lid",
							backgroundColor: "green",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
									 echo '"' . $p['Lid'] . '",';}?>
							]
						},

						<?php
							mysqli_data_seek($sqlkorupsi, 0);
						?>

						{
							label: "Dik",
							backgroundColor: "red",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Dik'] . '",';}?>
							 ]
						},

						<?php
							mysqli_data_seek($sqlkorupsi, 0);
						?>

						{
							label: "Tut",
							backgroundColor: "yellow",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Tut'] . '",';}?>
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
	mysqli_data_seek($sqlkorupsi, 0);
?>

<script  type="text/javascript">

	var ctx = document.getElementById("grafiklinetipikor-play").getContext("2d");
	var data = {
						labels: [
							<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Tahun'] . '",';}?>
						],


						datasets: [
							<?php
								mysqli_data_seek($sqlkorupsi, 0);
							?>

						{
							label: "Lid",
							fill: false,
							lineTension: 0.1,
							backgroundColor: "rgba(70, 173, 44, 0.9)",
							borderColor: "rgba(70, 173, 44, 0.9)",
							pointHoverBackgroundColor: "rgba(70, 173, 44, 0.9)",
							pointHoverBorderColor: "rgba(70, 173, 44, 0.9)",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
									 echo '"' . $p['Lid'] . '",';}?>
							]
						},

						<?php
							mysqli_data_seek($sqlkorupsi, 0);
						?>

						{
							label: "Dik",
							fill: false,
							lineTension: 0.1,
							backgroundColor: "rgba(215, 40, 40, 0.9)",
							borderColor: "rgba(215, 40, 40, 0.9)",
							pointHoverBackgroundColor: "rgba(215, 40, 40, 0.9)",
							pointHoverBorderColor: "rgba(215, 40, 40, 0.9)",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Dik'] . '",';}?>
							 ]
						},

						<?php
							mysqli_data_seek($sqlkorupsi, 0);
						?>

						{
							label: "Tut",
							fill: false,
							lineTension: 0.1,
							backgroundColor: "rgba(253, 203, 44, 0.9)",
							borderColor: "rgba(253, 203, 44, 0.9)",
							pointHoverBackgroundColor: "rgba(253, 203, 44, 0.9)",
							pointHoverBorderColor: "rgba(253, 203, 44, 0.9)",
							data: [
								<?php while ($p = mysqli_fetch_array($sqlkorupsi)) {
								 echo '"' . $p['Tut'] . '",';}?>
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
