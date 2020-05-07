<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="form_handler.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            
            Major:<br>
            <input type="radio" value="Computer Science" id="computer_science" name="major">
            <label for="computer_science">Computer Science</label>
            <br>
            
            <input type="radio" value="Web Design and Development" id="web_design" name="major">
            <label for="web_design">Web Design and Development</label><br>
            
            <input type="radio" value="Computer Information Technology" id="computer_it" name="major">
            <label for="computer_it">Computer Information Technology</label><br>
            
            <input type="radio" id="computer_engineering" value="Computer Engineering" name="major">
            <label for="computer_engineering">Computer Engineering</label>
            <br><br>
            
            What continents have you visited?<br>
			<input type="checkbox" name="places[]" id="place-na" value="North America"><label for="place-na">North America</label><br>
			<input type="checkbox" name="places[]" id="place-sa" value="South America"><label for="place-sa">South America</label><br>
			<input type="checkbox" name="places[]" id="place-asia" value="Asia"><label for="place-asia">Asia America</label><br>
			<input type="checkbox" name="places[]" id="place-eu" value="Europe"><label for="place-eu">Europe</label><br>
			<input type="checkbox" name="places[]" id="place-af" value="Africa"><label for="place-af">Africa</label><br>
			<input type="checkbox" name="places[]" id="place-aus" value="Australia"><label for="place-aus">Australia</label><br>
			<input type="checkbox" name="places[]" id="place-ant" value="Antarctica"><label for="place-ant">Antarctica</label><br>
			<br>
            
            
            <label for="comments">Comments:</label><br>
            <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>
            
            <input type="submit" id="submit" name="submit" value="Submit"> 
            
        </form>
    </body>
</html>
