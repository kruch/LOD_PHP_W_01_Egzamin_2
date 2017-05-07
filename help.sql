
CREATE TABLE Items_Orders(id int unsigned not null auto_increment, items_id int unsigned not null auto_increment,
               orders_id int unsinged not null auto_increment,
                foreign key(items_id) references Items(id),
  foreign key(order_id) references Orders(id),
  primary key(id))