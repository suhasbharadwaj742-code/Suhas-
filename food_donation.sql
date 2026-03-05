CREATE DATABASE food_donation;
USE food_donation;

CREATE TABLE donations (
id INT AUTO_INCREMENT PRIMARY KEY,
donor_name VARCHAR(100),
food_type VARCHAR(100),
quantity VARCHAR(50),
location VARCHAR(100),
pickup_time VARCHAR(50)
);
