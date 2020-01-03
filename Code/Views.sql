CREATE VIEW admin_users AS SELECT * FROM `users` WHERE admin_check = 1; 

CREATE VIEW normal_users AS SELECT * FROM `users` WHERE admin_check = 0;