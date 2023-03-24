CREATE TABLE Users (
	email VARCHAR(255),
	phone VARCHAR(15) NOT NULL,
	userName VARCHAR(20),
	password VARCHAR(20),
	PRIMARY KEY (email),
	UNIQUE(phone) 
);

CREATE TABLE Employers (
	email VARCHAR(255),
    FOREIGN KEY (email) REFERENCES Users
);

CREATE TABLE Employees (
	email VARCHAR(255),
    FOREIGN KEY (email) REFERENCES Users
);

CREATE TABLE Applications_Completes (
	appID INT, 
	intro TEXT, 
    email VARCHAR(255) NOT NULL,
	PRIMARY KEY (appID),
	FOREIGN KEY (email) REFERENCES Users
);

CREATE TABLE Jobs_Posts (
	jobID INT, 
	industry VARCHAR(10), 
	jobName VARCHAR(20), 	
	postDate DATE, 
	endDate DATE, 
	email VARCHAR(255) NOT NULL,
	PRIMARY KEY (jobID),
	FOREIGN KEY (email) REFERENCES Users
);

CREATE TABLE Applications_For (
	appID INT, 
	intro TEXT, 
	jobID INT NOT NULL,
	PRIMARY KEY (appID),
	FOREIGN KEY (jobID) REFERENCES Jobs_Posts
);

INSERT INTO Users (email, phone, userName, password) VALUES 
('abcd@gmail.com', '19585406686', 'John Bill', 'od324sajsod'),
('foo@gmail.com', '15230990864', 'Ajeet McCracken', 'fijsoi243'),
('bar@gmail.com', '19021867676', 'Felix Samuel', 'ljtrew32'),
('fefgh90@gmail.com', '12127733559', 'Arwel Ybarra', 'plljak_dk'),
('blahblah@gmail.com', '13179122284', 'Niles Medved', 'euowe2sd'),
('opiu@gmail.com', '17262331094', 'Perle Simonis', 'ololol78u'),
('xyz@outlook.com', '17300984224', 'Kalyani Adkins', 'aoloejdp23'),
('def@gmail.com', '10778044605', 'Felizitas Lyon', 'thasooft#s'),
('ghi@gmail.com',  '16846966019', 'Martin Strong', 'dolspaslp'),
('jkl@outlook.com', '14140999677', 'Serhii Brant', 'ha3lo4basko'),
('mnk@gmail.com', '15796144755', 'Boniface Ikin', 'f33llik3dyin'),
('row@gmail.com', '1951548476', 'Ajay Sinclair', 'n3noonslay33r');

INSERT INTO Employees (email) VALUES 
('abcd@gmail.com'),
('foo@gmail.com'),
('bar@gmail.com'),
('fefgh90@gmail.com'),
('blahblah@gmail.com'),
('opiu@gmail.com');

INSERT INTO Employers (email) VALUES 
('xyz@outlook.com'),
('def@gmail.com'),
('ghi@gmail.com'),
('jkl@outlook.com'),
('mnk@gmail.com'),
('row@gmail.com');

INSERT INTO Applications_Completes (appID,intro,cTime, email) VALUES 
(1, 'here is my application', 'abcd@gmail.com'),
(2, 'here is my application', 'foo@gmail.com'),
(3, 'here is my application', 'bar@gmail.com'),
(4, 'here is my application', 'fefgh90@gmail.com'),
(5, 'here is my application', 'blahblah@gmail.com'),
(6, 'here is my application', 'opiu@gmail.com'),
(7, 'here is my application', 'bar@gmail.com'),
(8, 'here is my application', 'foo@gmail.com');

INSERT INTO Jobs_Posts (jobID,industry,jobName,postDate,endDate,email) VALUES 
(1, 'Finance', 'accountant', '2023-01-01', '2023-01-30', 'xyz@outlook.com'),
(2, 'Information Technology', 'software engineer', '2023-01-02', '2023-01-28', 'def@gmail.com'),
(3, 'Information Technology', 'network administrator', '2023-01-06', '2023-01-30', 'ghi@gmail.com'),
(4, 'Healthcare', 'doctor', '2022-01-02', '2022-01-30', 'jkl@outlook.com'),
(5, 'Healthcare', 'nurse', '2023-02-01', '2023-02-25', 'mnk@gmail.com'),
(6, 'Education', 'teacher', '2023-02-03', '2023-02-22', 'row@gmail.com'),
(7, 'Finance', 'loan officers', '2023-01-01', '2023-01-20', 'xyz@outlook.com');

INSERT INTO Applications_For  (appID,intro, jobID) VALUES 
(1, 'here is my application', 1),
(2, 'here is my application', 2),
(3, 'here is my application', 3),
(4, 'here is my application', 4),
(5, 'here is my application', 5),
(6, 'here is my application', 6),
(7, 'here is my application', 7),
(8, 'here is my application', 1);
