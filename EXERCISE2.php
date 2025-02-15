<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //php
        //creating function to lessen data redundancy and reusable code

        //array of the 10 of the largest Cities
        $largestCities = [
        "Tokyo","Mexico City","New York City","Mumbai",
        "Seoul","Shanghai","Lagos","Buenos Aires","Cairo",
        "London"];

        //fuction sorting cities
        function sortCities($cities){
            sort($cities);
            echo "<ul class='unordered_list'>";
            foreach ($cities as $city){
                echo "<li>{$city}</li>";
            }
            echo "</ul>";
        }
        //for the display of original set of cities
        function printCities($cities){
                $count = 0;
                foreach ($cities as $city){
                    $count++;
                    echo $city;
                    if($city !=end($cities)){
                        echo ", ";
                    }
                    if(count($cities)>10 && $count%3===0){echo "<br>";}
                }
        }
    ?>

    <div id="navbar">
        <h1 id="title">PHP EXERCISE 2: list of ten of the largest cities</h1>
    </div>
    <div id=container>
        <div id="container-content">
            <div id="display">
                <p id="displayCities"> <?php printCities($largestCities); ?></p>
            </div>
            <div id="list">
                <div class="list_box">
                    <p class="display_description">Sorted Original Cities</p>
                    <?php sortCities($largestCities);?>
                </div>
                <div class="list_box">
                    <p class="display_description">Adding New Cities</p>
                    <p id="add_cities">
                        <?php 
                            array_push($largestCities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
                            printCities($largestCities);
                        ?>
                    </p>
                </div>
                <div class="list_box">
                    <p class="display_description">Sorted Final Cities</p>
                    <?php sortCities($largestCities);?>               
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>