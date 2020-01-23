<?php
include_once './core/getRegion.php';
$getRegion = new getRegion();
if(isset($_GET['region']))
{
    $region= $_GET['region'];
}
$cities = $getRegion -> getCities($region); ?>
<select id='city_input' class="form-control col-xs-1 col-md-4 col-lg-4 col-sm-4">
    <option value='0'>Выберите город</option>
<?php
foreach($cities as $city)
{
    echo '<option value=\''.$city['id'].'\'>'.$city['city'].'</option>';
}
echo "</select>";
?>
