<?php
class getRegion
{
  function getCountries(){
      $countryArr = array();
      include_once "./core/DB.php";
      $DB = DB::connect();
      $q = "SELECT id,country FROM countries";
      $result = $DB -> query($q);
      $i = 0;
      while($row = $result -> fetch())
      {
          $countryArr[$i]['id'] = $row['id'];
          $countryArr[$i]['country'] = $row['country'];
          $i++;
      }
      return $countryArr;
  }
  function getRegions(int &$country = NULL)
  {
      $regionsArr = array();
      include_once "./core/DB.php";
      $DB = DB::connect();
      $q = 'SELECT id,region,country_id FROM regions WHERE country_id=\''.$country.'\'';
      $result = $DB -> query($q);
      $i = 0;
      while($row = $result -> fetch())
      {
          $regionsArr[$i]['id'] = $row['id'];
          $regionsArr[$i]['region'] = $row['region'];
          $regionsArr[$i]['country_id'] = $row['country_id'];
          $i++;
      }
      return $regionsArr;
  }
function getCities( int &$region = NUll)
  {
      $citiesArr = array();
      include_once "./core/DB.php";
      $DB = DB::connect();
      $q = 'SELECT id,city,country_id, region_id FROM cities WHERE region_id=\''.$region.'\'';
      $result = $DB -> query($q);
      $i = 0;
      while($row = $result -> fetch())
      {
          $citiesArr[$i]['id'] = $row['id'];
          $citiesArr[$i]['city'] = $row['city'];
          $citiesArr[$i]['region_id'] = $row['region_id'];
          $citiesArr[$i]['country_id'] = $row['country_id'];
          $i++;
      }
      return $citiesArr;
  }
}
?>