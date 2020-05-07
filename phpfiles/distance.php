<?php
  require '../phpfiles/db.php';
  function dist($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo){
    $earthRadius = 6371;
    $latFrom = deg2rad($latitudeFrom);
    $lonFrom = deg2rad($longitudeFrom);
    $latTo = deg2rad($latitudeTo);
    $lonTo = deg2rad($longitudeTo);
  
    $latDelta = $latTo - $latFrom;
    $lonDelta = $lonTo - $lonFrom;
  
    $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
      cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
    return $angle * $earthRadius;
  }

  if($_GET['latitude'] && $_GET['longitude']){
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];
    $response;
    $mindist=-1;
    $minlatitude = 0;
    $minlongitude = 0;
    $shelterName = "";
    $shelterCapacity = 0;
    $shelterrCurrent = 0;
    $stmt = $conn->prepare("SELECT * FROM shelters");
    $stmt->execute(); 
    $result = $stmt->get_result();
    if($result->num_rows === 0) {
      $response['success'] = "false";
      $response['msg'] = "no shelter";
    }    
    while($row = $result->fetch_assoc()) {
      $response['success'] = "true";
      $response['msg'] = "Shelter Found!";
      if($mindist===-1){
        $minlatitude = $row['latitude'];
        $minlongitude = $row['longitude'];
        $shelterCapacity = $row['capacity'];
        $shelterName = $row['name'];
        $shelterrCurrent = $row['current_holding'];
        $mindist = dist($latitude, $longitude, $minlatitude, $minlongitude);
      }
      else{
        $newlatitude = $row['latitude'];
        $newlongitude = $row['longitude'];
        $newDistance = dist($latitude, $longitude, $newlatitude, $newlongitude);
        if($mindist > $newDistance){
          $minlatitude = $row['latitude'];
          $minlongitude = $row['longitude'];
          $shelterCapacity = $row['capacity'];
          $shelterName = $row['name'];
          $shelterrCurrent = $row['current_holding'];
          $mindist = $newDistance;
        }
      }
    }
    $response['minlatitude'] = $minlatitude;
    $response['minlongitude'] = $minlongitude;
    $response['capacity'] = $shelterCapacity;
    $response['name'] = $shelterName;
    $response['current_holding'] = $shelterrCurrent;
    $response['minDist'] = $mindist;
    $response =  json_encode($response);
    echo $response; 
    $stmt->close();    
  }
?>