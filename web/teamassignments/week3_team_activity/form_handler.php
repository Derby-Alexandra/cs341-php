<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$comments = htmlspecialchars($_POST["comments"]);
$places = $_POST["places"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Welcome: <?=$name ?></p><br>
        <p>Your email is: <a href="mailto:<?=$email ?>"><?=$email ?></a></p><br>
        <p>Your major is: <?=$major ?></p><br>
        <p>Your comments are: <?=$comments?></p><br>
        <p>You have visited:</p>
       	<ul>
<?php
        foreach ($places as $place) {
            $place_clean = htmlspecialchars($place);
            echo "<li><p>$place_clean</p></li>";
            }
?>		
	</ul>
    </body>
</html>
