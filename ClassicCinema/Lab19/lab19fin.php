<?php
/**
 * Created by PhpStorm.
 * User: olegmazhanov
 * Date: 24/09/2018
 * Time: 12:32
 */


$input_filename = "map-data-updated2.json";
$json_input = file_get_contents($input_filename);
$json = json_decode($json_input,true);
/*$json_output = json_encode($json,JSON_PRETTY_PRINT)."\n";
file_put_contents($output_filename,$json_output);*/
?>
    <br><p><table><thead><th>Type description</th><th>Description</th><th>Coordinate X</th><th>Coordinate Y</th></thead>

  <?php

    foreach ($json["features"] as $feature ) {
        ?> <tr><td>
            <?php echo $feature["type"];?>
        </td><td>
            <?php echo $feature["properties"]["description"];?>
        </td><td>
            <?php echo $feature["geometry"]["coordinates"][0];?>
        </td><td>
            <?php echo $feature["geometry"]["coordinates"][1]; ?>
        </td>
    </tr><?php
    }

    ?>
</table>
</p>
<?php

?>

