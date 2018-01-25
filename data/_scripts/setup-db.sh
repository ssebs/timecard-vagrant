#!/bin/bash
echo "Creating tables..."
mysql -u root -proot -Bse "DROP DATABASE test;" > /dev/null 2>&1
mysql -u root -proot -Bse "CREATE DATABASE test; USE test; CREATE TABLE Users (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, First VARCHAR(20), Last VARCHAR(20), Email VARCHAR(30), Birthday DATE);"
mysql -u root -proot -Bse "USE test; INSERT INTO Users VALUES (NULL,'Sebastian', 'Safari', 'ssebs@ymail.com', '1997-06-18');"
mysql -u root -proot -Bse "USE test; SELECT * FROM Users;"