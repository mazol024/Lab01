<?php
/**
 * Created by PhpStorm.
 * User: olegmazhanov
 * Date: 24/09/2018
 * Time: 12:32
 */

$input_filename = "map-data.json";
$output_filename = "map-data-updated2.json";
$json_input = file_get_contents($input_filename);
$json = json_decode($json_input,true);
/*$json_output = json_encode($json,JSON_PRETTY_PRINT)."\n";
file_put_contents($output_filename,$json_output);*/
?>
<p> <?php var_dump($json);?> </p>
<br><p>
<?php echo " print results: ". "\n";
    echo $json["type"];
    echo "   \n  *******  ";
    echo $json["features"][1]["properties"]["description"];


?>
</p>
<?php
/*$json = json_decode($json_input,false);
echo " as arrow notation ";
echo $json->features[1]->properties->description;
$json->features[1]->properties->description = 'Moscow Uni Lab';*/

$newArray = array("type"=>"Feature", "properties"=>["description"=>"Owheo Building"],
    "geometry"=>["type"=>["point"],"coordinates"=>[170.518204,-45.866727]], "id"=>3);
array_push($json["features"], $newArray);
/*
$json["features"][2] = {
    "type": "Feature",
      "properties": {
        "description": "Owheo Building"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [170.518204,-45.866727]
      },
      "id": 3
    }*/
    $json_output = json_encode($json,JSON_PRETTY_PRINT)."\n";
    file_put_contents($output_filename,$json_output);

?>

