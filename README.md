# Fetch words

## Frontend

* Download this rpository `git clone https://github.com/chaim1/Fetch-Words.git` in your cmd or terminal
* Download node and angular cli [angular](https://cli.angular.io/) [nodeJs](https://nodejs.org/en/download/)
* Navigate with cmd to Frontend `cd Frontend/`
* Run With cmd `npm install`
* Run With cmd `ng serve -o` then the app will open
* Press "Fetch words" and the words will enter the webSql
* Press "Show report" end the words will return from the webSql

##Backend

* Download this rpository `git clone https://github.com/chaim1/Fetch-Words.git` in your cmd or terminal
* Download XAMPP [XAMPP](https://www.apachefriends.org/index.html) 
* Open XAMPP and start Apache 
* Find rpository xampp and enter to rpository htdocs
* Move this folder to htdocs in XAMPP
* Insert in your browser `http://localhost:8080/phpmyadmin/` or `http://localhost/phpmyadmin/`
* Press `import` and choose teh file "Fetch_Words.sql" in this rpository press go
* Insert in your browser `http://localhost:8080/Backend/routes/fetch-tweets.php` for insert words to database
* Insert in your browser `http://localhost:8080/Backend/routes/tweet-report.php` To retrieve the words from the database
