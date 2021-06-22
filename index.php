<?php

  $apisource = "https://restcountries.eu/rest/v2/";
  $source = file_get_contents($apisource);
  $array = json_decode($source, true);

?>


<!DOCTYPE html>
<html>
<head>
  <title>Country Rest API in PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <?php

      echo '<table class="table"><thead>';
      echo '<tr><th class="col">No.</th>
      <th class="col">Flag</th>
      <th class="col">Country Name</th>
      <th class="col">Region</th>
      <th class="col">Country Code</th>
      <th class="col">Population</th></tr>';
      $no = 1;
      foreach ($array as list ("name" => $name,"flag" => $flag,"region" => $region,"population" => $population,"alpha2Code" => $countryCode)) {
        echo "<tr><th>{$no}</th><th><img src='{$flag}' width='100px' height='50p'></th><th>{$name}</th><th>{$region}</th><th>{$countryCode}</th><th>{$population}</th></tr>";
        $no++;
      }
      echo '</thead></table>';
    ?>
</body>
</html>