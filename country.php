<?php
include_once './core/getRegion.php';
$getRegion = new getRegion();
$countries =  $getRegion -> getCountries(); ?>
<select id='country_input' class="form-control col-xs-1 col-md-4 col-lg-4 col-sm-4">
    <option value='0'>Выберите страну</option>
<?php
foreach($countries as $country)
{
    echo "<option class='' value='".$country['id']."'>".$country['country']."</option>";
}
echo "</select>";
?>