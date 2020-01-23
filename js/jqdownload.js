function getCountry() {
    $(document).ready(function () {
        $("#country").load("/country.php");
    });
    $(document).ready(function () {
        $("#region").load("/region.php");
        $("#region").delegate('#region_input', 'hover', function () {
            $(this).prop('disabled', true);
        });
    });
    $(document).ready(function () {
        $("#city").load("/city.php");
        $("#city").delegate('#city_input', 'hover', function () {
            $(this).prop('disabled', true);
        });
    });
}
function getRegion(){
    $(document).ready(function(){
        $('#region').delegate('#region_input','hover',function () {
            var countryVal = $('#country_input').val();
            if(countryVal !=0) {
                $(this).prop('disabled', false);
            }
        });
        $('#city').delegate('#city_input','hover',function () {
            $(this).prop('disabled', true);
        });
        var country = $('#country_input').val();
       $("#region").load("/region.php?country="+country);
        });
}
function getCity(){
    $(document).ready(function(){
        $('#city').delegate('#city_input','hover',function () {
            var regionVal = $('#region_input').val();
            if(regionVal !=0) {
                $(this).prop('disabled', false);
            }
        });
        var region = $('#region_input').val();
        $("#city").load("/city.php?region="+region);
    });
}
$(function(){
    $('#country').delegate('#country_input','change',function () {
        getRegion();
        $("#city").load("/city.php");
    });
});
$(function(){
    $('#region').delegate('#region_input','change',getCity);
});
