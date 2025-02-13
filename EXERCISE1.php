<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //weather array
        $weather = ["sunshine","clouds","hail","sleet","snow","wind"];
        //quote with array values
        $quote = "<h1 id='quotes'>\"<i>We've seen all kinds of weather this month. 
            At the beginning of the month, we had {$weather[4]} and {$weather[5]}.
            Then came {$weather[0]} with a few {$weather[1]} and some rain. 
            At least we didn't get any {$weather[2]} or {$weather[3]}.\"<br><br>
            -Edmark C. Talingting BSIT II-B</i></h1>"
    ?>
    <div id="section">
        <div id="blur-overlay"></div>
        <div id="quotes-container">
            <?php echo $quote; ?>
        </div>
    </div>
</body>
</html>
