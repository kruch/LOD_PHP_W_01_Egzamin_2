<?php
$exercise_1a = "CREATE TABLE Destinations(id int(10), user_id int(10) unsigned not null, address varchar(255), lat DECIMAL(13,10), long DECIMAL(13,10), PRIMARY KEY (id), foreign key(user_id) references Users(id) on delete cascade)";

$exercise_1b = "CREATE TABLE Items_Orders(id int unsigned not null auto_increment, items_id int unsigned not null auto_increment,
               orders_id int unsinged not null auto_increment,
                foreign key(items_id) references Items(id),
  foreign key(order_id) references Orders(id),
  primary key(id))";

$exercise_1c = "";

$exercise_1d = "";

$exercise_1e = "";

$exercise_1f = "";

$exercise_1g = "";
