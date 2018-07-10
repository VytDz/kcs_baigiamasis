CREATE TABLE users (
  id INT(6)  AUTO_INCREMENT  PRIMARY KEY ,
  username VARCHAR(100) NOT NULL,
  userPwd VARCHAR(100) NOT NULL,
  avatar VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  name VARCHAR(100),
  lname VARCHAR(100),
  dateOfCreation DATETIME,
  lastSeen DATETIME
);
//==============================
CREATE TABLE comments(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  comment TEXT,
  date DATETIME,
  userid VARCHAR(100) NOT NULL
);


//===============================
CREATE TABLE gallery(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  category VARCHAR(100) NOT NULL,
  picsorder VARCHAR(100) NOT NULL,
  date DATETIME,
  userid VARCHAR(100) NOT NULL
);

//===============================
CREATE TABLE jobs(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  title VARCHAR(100) NOT NULL,
  advertisement TEXT NOT NULL,
  priorityorder VARCHAR(100) NOT NULL,
  date_created DATETIME,
  userid VARCHAR(100) NOT NULL
);
