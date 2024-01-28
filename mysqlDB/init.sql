USE javaApi;
CREATE TABLE IF NOT EXISTS user (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255),
    lastName VARCHAR(255),
    email VARCHAR(255)
);


insert into user (firstName, lastName, email) values 
('John', 'Doe', 'jdoe@gmail.com')
,('Paco', 'Perez', 'pperez@gmail.com')