#How to install my app to your computer:
##1. Download or clone files from the repo
##2. Install XAMPP
##3. Start a localhost server with XAMPP localhost:8080
put the downloaded files to your htdocs
##4. Open a browser and type:

```
localhost:8080
```

###5. Login to your myadmin interface
##6. Import the given sql file
##7. Modify the DB connection to your custom setup.

```
private $dbHost = "localhost";
private $dbUser = "root";
private $dbPassword = "nincsjelszo"; //if you dont use pass give an empty string "".
private $dbName ="finance";
private $conn;
```

##8. Run app in the browser on localhost:8080/moneyapp
