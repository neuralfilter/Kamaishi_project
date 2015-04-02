<!--
<?php 
print "<pre>";
print_r($points);
print "</pre>";
?>
-->
<?= $this->GoogleMap->map(); ?>
<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false); ?>

<!-- <?= $this->GoogleMap->addMarker("map_canvas", 1, array('latitude' =>$points[0]['Point']['lat'], 'longitude' => $points[0]['Point']['lng'])); ?> 
<?= $this->GoogleMap->addMarker("map_canvas", 1, array('latitude' =>$points[1]['Point']['lat'], 'longitude' => $points[1]['Point']['lng'])); ?> 
<?= $this->GoogleMap->addMarker("map_canvas", 1, array('latitude' =>$points[2]['Point']['lat'], 'longitude' => $points[2]['Point']['lng'])); ?> -->


<!--
<?= $this->GoogleMap->getDirections("map_canvas", "directions1", array(
        "from" => $points[0]['Point']['address'],
        "to" => $points[1]['Point']['address']
    )); 
?>
<?= $this->GoogleMap->getDirections("map_canvas", "directions2", array(
        "from" => $points[1]['Point']['address'],
        "to" => $points[2]['Point']['address']
    )); 
?>

-->


