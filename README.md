# How to install my app to your computer:

## Download or clone files from the repo

## Install XAMPP

## Start a localhost server with XAMPP localhost:8080

put the downloaded files to your htdocs

## Open a browser and type:

```
localhost:8080
```

## Login to your myadmin interface

## Import the given sql file

```
finance.sql
```

## Modify the DB connection to your custom setup.

```
private $dbHost = "localhost";
private $dbUser = "root";
private $dbPassword = "nincsjelszo"; //if you dont use pass give an empty string "".
private $dbName ="finance";
private $conn;
```

## Run app in the browser on localhost:8080/moneyapp
