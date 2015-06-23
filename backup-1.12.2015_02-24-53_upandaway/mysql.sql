-- cPanel mysql backup
GRANT USAGE ON *.* TO 'upandaway'@'localhost' IDENTIFIED BY PASSWORD '*FB6AD65235665AE4BBA5F22F57D1E5B76B20E060';
GRANT ALL PRIVILEGES ON `upandaway`.* TO 'upandaway'@'localhost';
GRANT USAGE ON *.* TO 'upandaway_co'@'localhost' IDENTIFIED BY PASSWORD '*6D6CCCE6E0C691F1B717174FD2D0F24074D70D05';
GRANT ALL PRIVILEGES ON `upandaway`.* TO 'upandaway_co'@'localhost';
