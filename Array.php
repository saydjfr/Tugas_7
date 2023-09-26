<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berlatih Array</h1>
    <?php
    echo "<h3>Soal No 1</h3> <br/>";
    $kids =["Mike","Dustin","Will","Lucas","Max","Eleven"];
    $adults=["Hopper","Nancy","Joyce","Jonathan","Murray"];
    print_r($kids);
    echo "<br/>";
    print_r ($adults);
    echo "<br/>";
    echo "<h3>Soal No 2</h3> <br/>";
    echo "Cast Stranger Things";
    echo "<br/>";
    echo "Total Kids : " .count($kids);
    echo "<br/>";
    echo "<ol>";
    echo "<li>$kids[0]</li>";
    echo "<li>$kids[1]</li>";
    echo "<li>$kids[2]</li>";
    echo "<li>$kids[3]</li>";
    echo "<li>$kids[4]</li>";
    echo "<li>$kids[5]</li>";
    echo "</ol>";
    echo "<br/>";
    echo "Total Adults : " .count($adults);
    echo "<br/>";
    echo "<ol>";
    echo "<li>$adults[0]</li>";
    echo "<li>$adults[1]</li>";
    echo "<li>$adults[2]</li>";
    echo "<li>$adults[3]</li>";
    echo "<li>$adults[4]</li>";
    echo"</ol>";
    echo "<br/>";
    echo "<h3> Soal Nomor 3</h3> <br/>";
    $dataorang=[
        [
            "Name"=>"Will Byers",
            "Age"=>"12",
            "Aliases"=>"Will The Wise",
            "Status"=>"Alive"
        ],
        [
            "Name"=>"Mike Whiller",
            "Age"=>"12",
            "Aliases"=>"Dungeon Master",
            "Status"=>"Alive"
        ],
        [
            "Name"=>"Jim Hopper",
            "Age"=>"43",
            "Aliases"=>"Chief Hopper",
            "Status"=>"Deceased"
        ],
        [
            "Name"=>"Eleven",
            "Age"=>"12",
            "Aliases"=>"El",
            "Status"=>"Alive"
        ]
        ];
        echo "<pre>";
        print_r($dataorang);
        echo "</pre>";
    ?>
</body>
</html>