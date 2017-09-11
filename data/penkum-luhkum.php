<?php

$tahun = $_POST['tahunPenkumLuhkum'];
$tahunini = $_POST['tahunini'];

$tahun5 = date("Y");
$tahun4 = $tahun5-1;
$tahun3 = $tahun4-1;
$tahun2 = $tahun3-1;
$tahun1 = $tahun2-1;

include_once '../bdi/konfig.php';
$penkum = mysqli_query($con, "SELECT IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun-01-01' AND '$tahun-03-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun-01-01' AND '$tahun-03-31')) AS TriwulanI,
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun-04-01' AND '$tahun-06-30') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun-04-01' AND '$tahun-06-30')) AS TriwulanII,
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun-07-01' AND '$tahun-09-30') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun-07-01' AND '$tahun-09-30')) AS TriwulanIII,
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun-10-01' AND '$tahun-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun-10-01' AND '$tahun-12-31')) AS TriwulanIV FROM bdi.penkum");

$luhkum = mysqli_query($con, "SELECT IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-01-01' AND '$tahun-03-31') IS NULL, 0 , SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-01-01' AND '$tahun-03-31')) AS TriwulanI,
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-04-01' AND '$tahun-06-30') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-04-01' AND '$tahun-06-30')) AS TriwulanII,
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-07-01' AND '$tahun-09-30') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-07-01' AND '$tahun-09-30')) AS TriwulanIII,
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-10-01' AND '$tahun-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-10-01' AND '$tahun-12-31')) AS TriwulanIV FROM bdi.luhkum");

$penkum5 = mysqli_query($con, "SELECT IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-03-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-12-31')) AS '$tahun1',
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31')) AS '$tahun2',
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31')) AS '$tahun3',
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31')) AS '$tahun4',
					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31')) AS '$tahun5' FROM bdi.penkum");

$luhkum5 = mysqli_query($con, "SELECT IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-03-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-12-31')) AS '$tahun1',
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31')) AS '$tahun2',
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31')) AS '$tahun3',
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31')) AS '$tahun4',
					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31')) AS '$tahun5' FROM bdi.luhkum");

$luhkecamatan = mysqli_query($con, "SELECT * FROM kecamatan");


if(isset($_POST["tahunPenkumLuhkum"]) || isset($_POST["tahunpenluhbartw"])){
?>

	<!--Data Penkum per TW-->
	<script  type="text/javascript">

	  var ctx = document.getElementById("penluhpertw").getContext("2d");
	  var data = {
	            labels: ["Triwulan I", "Triwulan II", "Triwulan III", "Triwulan IV"],
	            datasets: [
	            {
	              label: "Penyuluhan Hukum",
	              backgroundColor: "green",
	              data: [<?php while ($p = mysqli_fetch_array($luhkum)) {
	                 echo '"' . $p['TriwulanI'] . '","'. $p['TriwulanII'] . '","' . $p['TriwulanIII'] . '","' . $p['TriwulanIV'] . '"';}?>]
	            },
	            {
	              label: "Penerangan Hukum",
	              backgroundColor: "red",
	              data: [<?php while ($p = mysqli_fetch_array($penkum)) {
	                 echo '"' . $p['TriwulanI'] . '","'. $p['TriwulanII'] . '","' . $p['TriwulanIII'] . '","' . $p['TriwulanIV'] . '"';}?>]
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
		mysqli_data_seek($penkum, 0);
		mysqli_data_seek($luhkum, 0);
	?>

	<!--data grafik tw per tahun -->
  <script  type="text/javascript">

 	 var ctx = document.getElementById("penperthtw1").getContext("2d");
 	 var data = {
 						 labels: ["Triwulan I"],
 						 datasets: [

 						 {
 							 label: "Penerangan Hukum",
 							 backgroundColor: "red",
 							 data: [<?php while ($p = mysqli_fetch_array($penkum)) {
 									echo '"' . $p['TriwulanI'] . '"';}?>]
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

 				 //--------
				 <?php
				 	mysqli_data_seek($penkum, 0);
				 	mysqli_data_seek($luhkum, 0);
				 ?>
				 var ctx = document.getElementById("penperthtw2").getContext("2d");
			 	 var data = {
			 						 labels: ["Triwulan II"],
			 						 datasets: [

			 						 {
			 							 label: "Penerangan Hukum",
			 							 backgroundColor: "red",
			 							 data: [<?php while ($p = mysqli_fetch_array($penkum)) {
			 									echo '"' . $p['TriwulanII'] . '"';}?>]
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



	<?php
	 mysqli_data_seek($penkum, 0);
	 mysqli_data_seek($luhkum, 0);
	?>
	var ctx = document.getElementById("penperthtw3").getContext("2d");
	var data = {
						labels: ["Triwulan III"],
						datasets: [

						{
							label: "Penerangan Hukum",
							backgroundColor: "red",
							data: [<?php while ($p = mysqli_fetch_array($penkum)) {
								 echo '"' . $p['TriwulanIII'] . '"';}?>]
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


	<?php
	 mysqli_data_seek($penkum, 0);
	 mysqli_data_seek($luhkum, 0);
	?>
var ctx = document.getElementById("penperthtw4").getContext("2d");
var data = {
					labels: ["Triwulan IV"],
					datasets: [

					{
						label: "Penerangan Hukum",
						backgroundColor: "red",
						data: [<?php while ($p = mysqli_fetch_array($penkum)) {
							 echo '"' . $p['TriwulanIV'] . '"';}?>]
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
			 mysqli_data_seek($penkum, 0);
			 mysqli_data_seek($luhkum, 0);
			?>

<script  type="text/javascript">
			var ctx = document.getElementById("luhperthtw1").getContext("2d");
			var data = {
								labels: ["Triwulan I"],
								datasets: [

								{
									label: "Penyuluhan Hukum",
									backgroundColor: "red",
									data: [<?php while ($p = mysqli_fetch_array($luhkum)) {
										 echo '"' . $p['TriwulanI'] . '"';}?>]
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

						<?php
						 mysqli_data_seek($penkum, 0);
						 mysqli_data_seek($luhkum, 0);
						?>

						var ctx = document.getElementById("luhperthtw2").getContext("2d");
						var data = {
											labels: ["Triwulan II"],
											datasets: [

											{
												label: "Penyuluhan Hukum",
												backgroundColor: "red",
												data: [<?php while ($p = mysqli_fetch_array($luhkum)) {
													 echo '"' . $p['TriwulanII'] . '"';}?>]
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

									<?php
									 mysqli_data_seek($penkum, 0);
									 mysqli_data_seek($luhkum, 0);
									?>

									var ctx = document.getElementById("luhperthtw3").getContext("2d");
									var data = {
														labels: ["Triwulan III"],
														datasets: [

														{
															label: "Penyuluhan Hukum",
															backgroundColor: "red",
															data: [<?php while ($p = mysqli_fetch_array($luhkum)) {
																 echo '"' . $p['TriwulanIII'] . '"';}?>]
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

												<?php
												 mysqli_data_seek($penkum, 0);
												 mysqli_data_seek($luhkum, 0);
												?>

												var ctx = document.getElementById("luhperthtw4").getContext("2d");
												var data = {
																	labels: ["Triwulan IV"],
																	datasets: [

																	{
																		label: "Penyuluhan Hukum",
																		backgroundColor: "red",
																		data: [<?php while ($p = mysqli_fetch_array($luhkum)) {
																			 echo '"' . $p['TriwulanIV'] . '"';}?>]
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
  <!--End perTW-->

	<!--Reset-->
	<?php
		mysqli_data_seek($penkum, 0);
		mysqli_data_seek($luhkum, 0);
	?>

	<!--Data Tabel-->
	<script type="text/javascript">
		var dataset = [
				[<?php while ($p = mysqli_fetch_array($luhkum)) {
					 echo '"' . $p['TriwulanI'] . '","'. $p['TriwulanII'] . '","' . $p['TriwulanIII'] . '","' . $p['TriwulanIV'] . '"';}?>],
				[<?php while ($p = mysqli_fetch_array($penkum)) {
					 echo '"' . $p['TriwulanI'] . '","'. $p['TriwulanII'] . '","' . $p['TriwulanIII'] . '","' . $p['TriwulanIV'] . '"';}?>]
		];
	</script>


<?php
}
else if(isset($_POST["tahunini"])){
	?>
	<!--Data Penkum per 5 tahun-->
	<script  type="text/javascript">

		var ctx = document.getElementById("penluhperth").getContext("2d");
		var data= {
							labels: [<?php echo '"'.$tahun1.'","'.$tahun2.'","'.$tahun3.'","'.$tahun4.'","'.$tahun5.'"' ?>],
							datasets: [
							{
								label: "Penyuluhan Hukum",
								backgroundColor: "green",
								data: [<?php
								   while ($p = mysqli_fetch_array($luhkum5)) {
									 echo '"' . $p[$tahun1] . '","'. $p[$tahun2] . '","' . $p[$tahun3] . '","' . $p[$tahun4] . '","' . $p[$tahun5] . '"';}?>]
							},
							{
								label: "Penerangan Hukum",
								backgroundColor: "red",
								data: [<?php
										while ($p = mysqli_fetch_array($penkum5)) {
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

	<!--Reset-->
	<?php
		mysqli_data_seek($penkum5, 0);
		mysqli_data_seek($luhkum5, 0);
	?>

		<!--Data Tabel-->
		<script type="text/javascript">
			var datasetth = [
					[<?php while ($p = mysqli_fetch_array($luhkum5)) {
						 echo '"' . $p[$tahun1] . '","'. $p[$tahun2] . '","' . $p[$tahun3] . '","' . $p[$tahun4] . '","' . $p[$tahun5] . '"';}?>],
					[<?php while ($p = mysqli_fetch_array($penkum5)) {
						 echo '"' . $p[$tahun1] . '","'. $p[$tahun2] . '","' . $p[$tahun3] . '","' . $p[$tahun4] . '","' . $p[$tahun5] . '"';}?>]
					 ];
		</script>


<?php
} else if(isset($_POST["kecamatan"])){
?>
<!--Data Luhkum per kecamatan-->
<script  type="text/javascript">

	var ctx = document.getElementById("luhkecamatan").getContext("2d");	var i = 0;

	var dataset = [<?php
		 while ($p = mysqli_fetch_array($luhkecamatan)) {
		 echo '"' . $p['NamaKecamatan'] . '",';}?>];

		 <?php
			mysqli_data_seek($luhkecamatan, 0);

 	  $valuekec = array();
		$i=0;

		$row = mysqli_num_rows($luhkecamatan);

		while ($p = mysqli_fetch_array($luhkecamatan)) {
		$valuekec[$i] = $p['ID'];
		 $i++;
	 	}
		$i=0;

		?>

	var data= {
						labels: dataset,
						datasets: [
						{
							label: "Penyuluhan Hukum",
							backgroundColor: "green",
							data: [
								<?php

								$count = count($valuekec);
								while ($count != 0) {
									$rowget = mysqli_query($con, "SELECT kelurahan.IDKecamatan  FROM kegiatanluhkum, kelurahan, kecamatan where kelurahan.ID = kegiatanluhkum.IDKelurahan and kelurahan.IDKecamatan=".$valuekec[$i]." group by (kegiatanluhkum.IDLuhkum)");
									if($rowget){
										$rowcount = mysqli_num_rows($rowget);
										echo $rowcount.",";
									}
									$count--;
									$i++;
								}
								 ?>
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
}
 ?>
