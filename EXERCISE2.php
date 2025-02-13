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
            listCities($cities);
        }
        //for the display of original set of cities
        function printCities($cities){
            foreach ($cities as $city){
                echo $city;
                if($city !=end($cities)){
                    echo ", ";
                }
            }
        }
        //for creating unordered list
        function listCities($cities){
             // print it with unordered list
            echo "<ul class='unordered_list'>";
            foreach ($cities as $city){
                echo "<li>{$city}</li>";
            }
            echo "</ul>";
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
                    <?php 
                        array_push($largestCities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
                        listCities($largestCities);
                    ?>
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