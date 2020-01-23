<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <title> Тестовое задание</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="/css/custom.css" rel="stylesheet" type="text/css" />
    <script src="/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jqdownload.js"></script>
</head>
<body onload="getCountry()">

    <div id="pageBody" class="container">
        <div class="row">
            <form action="" class="form-inline">
                <div id="country" class="form-group"></div>
                <div id="region" class="form-group"></div>
                <div id="city" class="form-group"></div>
            </form>
        </div>
        <div class="row">
            <table class="table table-responsive table-striped table-bordered">
                <?php for($i=0;$i<=4;$i++){
                    $row= $i+1;
                    echo "<tr>";
                    for($k=0;$k<=4;$k++){
                        $col = $k+1;
                        echo "<td> Ячейка $col, Строка $row";
                    }
                    echo "</tr>";
                } ?>
            </table>
        </div>
    </div>

</body>