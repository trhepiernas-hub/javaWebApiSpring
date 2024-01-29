USE javaApi;
CREATE TABLE IF NOT EXISTS user (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255)
);


insert into user (first_name, last_name, email) values 
('John', 'Doe', 'jdoe@gmail.com')
,('Paco', 'Perez', 'pperez@gmail.com')