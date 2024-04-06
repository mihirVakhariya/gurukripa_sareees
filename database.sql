CREATE DATABASE gurukripa;

CREATE TABLE user (
    user_id BIGINT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name UNIQUE VARCHAR(50),
    user_pswd VARCHAR(255),
    email VARCHAR(32)
);

CREATE TABLE admin (
    admin_id BIGINT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
    admin_name UNIQUE VARCHAR(50),
    admin_pswd VARCHAR(255),
    email VARCHAR(32)
);

CREATE TABLE sarees (
    saree_id BIGINT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY,
    saree_name VARCHAR(50),
    catagory VARCHAR(50),
    price NUMERIC(6,2),
    photo VARCHAR(255),
);

CREATE TABLE order (
    user_id BIGINT,
    saree_id BIGINT,
    order_id BIGINT UNIQUE NOT NULL PRIMARY KEY,
    price INT,
    Quantity INT,
    CONSTRAINT order_user_fk FOREIGN KEY (user_id)
    REFERENCES user(user_id),
    CONSTRAINT order_saree_fk FOREIGN KEY (saree_id)
    REFERENCES sarees(saree_id)
);

CREATE TABLE payment (
    saree_id BIGINT,
    payment_status VARCHAR(10),
    CONSTRAINT payemnt_saree_fk FOREIGN KEY (saree_id)
    REFERENCES sarees(saree_id)
);