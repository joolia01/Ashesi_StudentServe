SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/* Database: SVP2025.sql */

DROP DATABASE IF EXISTS SVP2025;
CREATE DATABASE SVP2025;
USE SVP2025;

/* Interests Table */
CREATE TABLE `interests`(
	`interestID`int(11) NOT NULL PRIMARY KEY,
    `interestName` varchar (500) NOT NULL
);

INSERT INTO `interests` (`interestID`, `interestName`) VALUES
(1, 'Education and Tutoring'),
(2, 'Environmental Conservation & Sustainability'),
(3, 'Health & Wellness'),
(4, 'Community Service & Outreach'),
(5, 'Animal Welfare'),
(6, 'Arts & Culture'),
(7, 'Technology & Innovation'),
(8, 'Social Justice & Advocacy'),
(9, 'International Aid & Development'),
(10, 'Emergency Response & Disaster Relief'),
(11, 'Sports & Recreation'),
(12, 'Entrepreneurship & Business');

/* Roles */
CREATE TABLE `role` (
  `roleID` int(11) NOT NULL PRIMARY KEY,
  `roleName` varchar(100) NOT NULL
);

/* There are two roles- student and organization*/
INSERT INTO `role` (`roleID`, `roleName`) VALUES
(1, 'superadmin'),
(2, 'admin'),    /*Organizations are the admins */
(3, 'standard user');   /*Students are the standard users */

/* Student Entity*/
CREATE TABLE `student`(
    `studentID` int(10) NOT NULL PRIMARY KEY,
    `firstName` varchar(50) NOT NULL,
    `lastName` varchar(50) NOT NULL, 
    `gender` int(11) NOT NULL,
    `dob` date NOT NULL,
    `phoneNumber` varchar(50) NOT NULL,
    `interest` int(11),     /* Foreign key */
    `skills` varchar(500) NOT NULL,
    `previousExperiences` varchar(600) NOT NULL,
    `gpa` DECIMAL,
    `email` varchar(255) NOT NULL,
    `passwd` varchar(255) NOT NULL,
    `rid`  int(11),      /* Foreign Key */
    FOREIGN KEY (`interest`) REFERENCES `interests`(`interestID`),
    FOREIGN KEY (`rid`) REFERENCES `role`(`roleID`)
);

/* Organization Cause Table */
CREATE TABLE `cause`(
	`causeID`int(11) NOT NULL PRIMARY KEY,
    `causeName` varchar (500) NOT NULL
);

INSERT INTO `cause` (`causeID`, `causeName`) VALUES
(1, 'Education and Tutoring'),
(2, 'Environmental Conservation & Sustainability'),
(3, 'Health & Wellness'),
(4, 'Community Service & Outreach'),
(5, 'Animal Welfare'),
(6, 'Arts & Culture'),
(7, 'Technology & Innovation'),
(8, 'Social Justice & Advocacy'),
(9, 'International Aid & Development'),
(10, 'Emergency Response & Disaster Relief'),
(11, 'Sports & Recreation'),
(12, 'Entrepreneurship & Business');

/* Organization Profile */
CREATE TABLE `organization`(
    `organizationID`int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `organizationName` varchar (255) NOT NULL,
    `mission` varchar (500) NOT NULL,
    `cause` int(11),       /* Foreign key */
    `organizationType` varchar (255) NOT NULL,
    `phoneNumber` varchar(50) NOT NULL,
    `email` varchar (255) NOT NULL,
    `passwd` varchar(255) NOT NULL,
    `rid`  int(11),      /* Foreign Key */
    FOREIGN KEY (`cause`) REFERENCES `cause`(`causeID`),
    FOREIGN KEY (`rid`) REFERENCES `role`(`roleID`)
);

/* Volunteer Listings*/
CREATE TABLE `volunteerOpportunity` (
    `opportunityID` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `organizationName` varchar(255) NOT NULL,
    `cause` varchar(255) NOT NULL,
    `studentRole` varchar(255) NOT NULL,
    `volunteerDescription` varchar(500) NOT NULL,
    `volunteerLocation` varchar(255) NOT NULL,
    `startDate` date NOT NULL,
    `endDate` date NOT NULL,
    `numberOfHoursDaily` int NOT NULL,
    `requirements` varchar(500) NOT NULL,
    `orgID` int(10),   /* Foreign key */
    FOREIGN KEY (`orgID`) REFERENCES `organization`(`organizationID`)
);

/* Registration for Volunteer Opportunity*/
CREATE TABLE `registration`(
    `registrationID` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `registerDate` date NOT NULL,
    `oppID` int,   /*Foreign key*/
    `sID` int,     /*Foreign key*/
    `companyID` int,      /*Foreign key*/
    FOREIGN KEY (`oppID`) references `volunteerOpportunity`(`opportunityID`),
    FOREIGN KEY (`sID`) references `student`(`studentID`),
    FOREIGN KEY (`companyID`) references `organization`(`organizationID`)
);

/* Volunteer Tracking */
CREATE TABLE `tracking`(
    `trackingID` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `activityDate` date NOT NULL,
    `numberOfHours` int NOT NULL,
    `descriptionOfActivity` varchar (500) NOT NULL,
    `achievements` varchar (500) NOT NULL,
    `sID` int,    /*Foreign key*/
	`oID` int,    /*Foreign key*/
    `feedback` varchar (500) NOT NULL,
    FOREIGN KEY (`sID`) references `student`(`studentID`),
    FOREIGN KEY (`oID`) references `volunteerOpportunity`(`opportunityID`)
);


