CREATE TABLE Users (
    UserID INT PRIMARY KEY,
    UserName VARCHAR(50),
    UserAddress VARCHAR(100),
    UserPosition VARCHAR(50)
);

INSERT INTO Users(UserID, UserName, UserAddress, UserPosition) VALUES 
(1, 'Bobby', 'Apple Street', 'Staff'),
(2, 'Charlie', 'Mango Street', 'Staff'),
(3, 'Debbie', 'Orange Street', 'Officer'),
(4, 'Edward', 'Watermelon Street', 'Manager'),
(5, 'Fabian', 'Cherry Street', 'Staff');
