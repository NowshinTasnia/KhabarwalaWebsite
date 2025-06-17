-- Create tbl_admin
CREATE TABLE tbl_admin (
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100),
    username VARCHAR(100),
    password VARCHAR(255)
);

-- Create tbl_category
CREATE TABLE tbl_category (
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100),
    image_name VARCHAR(255),
    featured VARCHAR(10),
    active VARCHAR(10)
);

-- Create tbl_order
CREATE TABLE tbl_order (
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    food VARCHAR(150),
    price VARCHAR(255),
    qty DECIMAL(10,2),
    total VARCHAR(255),
    order_date INT(10),
    status VARCHAR(10),
    customer_name VARCHAR(10),
    customer_contact VARCHAR(10),
    customer_email VARCHAR(10),
    customer_address VARCHAR(10)
);

-- Create tbl_food
CREATE TABLE tbl_food (
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(150),
    description VARCHAR(255),
    price DECIMAL(10,2),
    image_name VARCHAR(255),
    category_id INT(10),
    featured VARCHAR(10),
    active VARCHAR(10)
);


-- Insert into tbl_admin
INSERT INTO tbl_admin (full_name, username, password) VALUES
('Admin User', 'admin', 'admin123');

-- Insert into tbl_category
INSERT INTO tbl_category (title, image_name, featured, active) VALUES
('Burgers', 'burgers.jpg', 'Yes', 'Yes'),
('Pizzas', 'pizzas.jpg', 'Yes', 'Yes');

-- Insert into tbl_food
INSERT INTO tbl_food (title, description, price, image_name, category_id, featured, active) VALUES
('Cheeseburger', 'A delicious cheeseburger', 5.99, 'cheeseburger.jpg', 1, 'Yes', 'Yes'),
('Margherita Pizza', 'Classic Margherita Pizza', 8.99, 'margherita.jpg', 2, 'Yes', 'Yes');

-- Insert into tbl_order
INSERT INTO tbl_order (food, price, qty, total, order_date, status, customer_name, customer_contact, customer_email, customer_address) VALUES
('Cheeseburger', '5.99', 2, '11.98', UNIX_TIMESTAMP(), 'Delivered', 'John Doe', '1234567890', 'john@example.com', '123 Main St');