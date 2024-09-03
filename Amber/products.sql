CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    image VARCHAR(255)
);

INSERT INTO products (name, price, description, image) VALUES
('Product 1', 19.99, 'Description for Product 1', '../assets/images/hat/hat1.jpg');
INSERT INTO products (name, price, description, image) VALUES
('Product 2', 10.99, 'Description for Product 2', '../assets/images/hat/hat2.jpg'),
('Product 3', 12.99, 'Description for Product 2', '../assets/images/hoodie/hoodie1.jpg');
