<?php
include_once '../bdi/konfig.php';
$tahun = $_POST['tahunpeta'];
$sqlpetapenkum = "SELECT * FROM luhkum WHERE Waktu  >= '$tahun-01-01' AND Waktu <= '$tahun-12-31' AND (Lat IS NOT NULL AND
	TRIM(Lat) <> '') AND (Lon IS NOT NULL AND TRIM(Lon) <> '') ORDER BY Waktu ASC";
$sqlluhkumbelum = "SELECT * FROM bdi.lokasigiatpenluh where JenisKegiatan='0' AND PenkumLuhkum='2' AND (Lat IS NOT NULL AND
  TRIM(Lat) <> '') AND (Lon IS NOT NULL AND TRIM(Lon) <> '')";


?>
<div class="container">
  <div class="col-lg-12">
      <h1 class="page-header">Peta Luhkum  <?php echo $tahun; ?></h1>

  </div>
  <center>
    <div id="wrapper">
      <div id = "penkum" style = "width:100%; height:600px;"></div>
    </div>
  </center>
</div>


<script>
        function loadMap() {

           var mapOptions = {
              center:new google.maps.LatLng(-0.898885, 119.864832),
              zoom:13,
              mapTypeId:google.maps.MapTypeId.ROADMAP
           };

           var map = new google.maps.Map(document.getElementById("penkum"),mapOptions);

      //      var pinColor = "FE7569";
		    // var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
		    //     new google.maps.Size(21, 34),
		    //     new google.maps.Point(0,0),
		    //     new google.maps.Point(10, 34));
		    // var pinShadow = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
		    //     new google.maps.Size(40, 37),
		    //     new google.maps.Point(0, 0),
		    //     new google.maps.Point(12, 35));

          //  var marker = new google.maps.Marker({
          //      position: new google.maps.LatLng(-0.884494, 119.842855),
          //      map: map,
          //      icon:'<?php echo "img/marker-green.png";?>',
          //      animation: google.maps.Animation.BOUNCE
          //   });
          //
          // var marker = new google.maps.Marker({
          //      position: new google.maps.LatLng(-0.898885, 119.864832),
          //      map: map,
          //      icon:'<?php echo "img/marker-red.png";?>',
          //      animation: google.maps.Animation.BOUNCE
          //   });

           <?php
			$result = mysqli_query($con, $sqlpetapenkum);
            while ($p = mysqli_fetch_array($result)){

            	?>
            	   var marker = new google.maps.Marker({
		               position: new google.maps.LatLng( <?php echo $p['Lat']; ?>, <?php echo $p['Lon']; ?>),
		               map: map,
		               icon:'<?php echo "img/marker-green.png";?>',
		               animation: google.maps.Animation.DROP
		            });
            	<?php
            }
           ?>

           <?php
     
      $result = mysqli_query($con, $sqlluhkumbelum);
            while ($p = mysqli_fetch_array($result)){

              ?>
                 var marker = new google.maps.Marker({
                   position: new google.maps.LatLng( <?php echo $p['Lat']; ?>, <?php echo $p['Lon']; ?>),
                   map: map,
                   icon:'<?php echo "img/marker-red.png";?>',
                   animation: google.maps.Animation.BOUNCE
                });
              <?php
            }
           ?>
        }

        google.maps.event.addDomListener(window, 'load', loadMap);
</script>
