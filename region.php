<?php
include_once './core/getRegion.php';
$getRegion = new getRegion();
if(isset($_GET['country']))
{
    $country = $_GET['country'];
}
$regions = $getRegion -> getRegions($country); ?>
<select id='region_input' class="form-control col-xs-1 col-md-4 col-lg-4 col-sm-4">
    <option value='0'>Выберите область</option>
<?php
foreach($regions as $region)
{
    echo '<option value=\''.$region['id'].'\'>'.$region['region'].'</option>';
}
echo "</select>";
?>