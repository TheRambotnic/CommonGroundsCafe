CREATE DATABASE common_grounds_cafe;
USE common_grounds_cafe;


###############################
#
# User Privileges
#
###############################
CREATE TABLE user_privileges (
	`id_user_privilege`	INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`up_name`			VARCHAR(255) NOT NULL
);

INSERT INTO user_privileges (`up_name`)
VALUES	("Administrator"),
		("Regular User");


###############################
#
# Users
#
###############################
CREATE TABLE users (
	`id_user`			INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`u_name`			VARCHAR(255) NOT NULL,
	`u_username`		VARCHAR(255) NOT NULL,
	`u_password`		VARCHAR(100) NOT NULL,
	`u_bio`				TEXT NULL,
	`u_join_date`		DATE NOT NULL,
	`u_join_time`		TIME NOT NULL,
	`id_user_privilege`	INT(11) NOT NULL,
	FOREIGN KEY (`id_user_privilege`) REFERENCES user_privileges (`id_user_privilege`)
);

INSERT INTO users (`u_name`, `u_username`, `u_password`, `u_bio`, `u_join_date`, `u_join_time`, `id_user_privilege`)
VALUES	("Site Administrator", "admin", "$2y$10$uhucBUeQp6TNGkMP0iqt0OC6A6nPctoEtM0.RgK0yfAMhmK7f7vD.", "", CURRENT_DATE, CURRENT_TIME, 1);


###############################
#
# Categories
#
###############################
CREATE TABLE categories (
	`id_category`	INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`cat_name`		VARCHAR(255) NOT NULL
);

INSERT INTO categories (`cat_name`)
VALUES 	("Cold Beverages"),
		("Hot Beverages"),
		("Extras");


###############################
#
# Products
#
###############################
CREATE TABLE products (
	`id_product`	INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`p_name`		VARCHAR(255) NOT NULL,
	`p_price`		DECIMAL(8,2) NOT NULL,
	`p_img_id`		VARCHAR(255) NULL,
	`id_category`	INT(11) NOT NULL,
	FOREIGN KEY (`id_category`) REFERENCES categories (`id_category`)
);

INSERT INTO products (`p_name`, `p_price`, `p_img_id`, `id_category`)
VALUES	("Milkshake", 3.50, "milkshake.jpg", 1),
		("Thickshake", 4.00, "thickshake.jpg", 1),
		("Caramel Mocha Thickshake", 5.00, "caramel_mocha.jpg", 1),
		("Slushie", 2.00, "slushie.jpg", 1),
		("Iced Coffee", 3.00, "iced_coffee.jpg", 1),
		("Frappe", 3.50, "frappe.jpg", 1),
		("Flat white", 3.00, "flat_white.jpg", 2),
		("Mocha", 3.00, "mocha.jpg", 2),
		("Hot chocolate", 3.00, "hot_chocolate.jpg", 2),
		("Cappuccino", 3.00, "cappuccino.jpg", 2),
		("Long black", 3.00, "long_black.jpg", 2),
		("Latte", 3.00, "latte.jpg", 2),
		("Macchiato", 3.00, "macchiato.jpg", 2),
		("Tea", 2.00, "tea.jpg", 2),
		("Extra flavouring (per squirt)", 0.50, "noimage.jpg", 3),
		("Extra shot of coffee", 0.50, "noimage.jpg", 3);
