CREATE DATABASE `onecourse` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `oc_channel` (
  `CropId` char(36) NOT NULL,
  `ChannelId` char(36) NOT NULL,
  `ChannelCode` varchar(45) NOT NULL,
  `ChannelName` varchar(100) NOT NULL,
  `SourceUrl` varchar(200) NOT NULL,
  `ShortUrl` varchar(100) NOT NULL,
  `UV` int(11) NOT NULL DEFAULT '0',
  `PV` int(11) NOT NULL DEFAULT '0',
  `AddBy` char(36) NOT NULL,
  `AddTime` datetime NOT NULL,
  `LastUpdateTime` datetime NOT NULL,
  PRIMARY KEY (`CropId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_corporation` (
  `CropId` char(36) NOT NULL,
  `CropCode` char(8) NOT NULL,
  `CropName` varchar(45) NOT NULL,
  `CropDesc` varchar(45) DEFAULT NULL,
  `CropOrgCode` varchar(45) DEFAULT NULL,
  `CropBizCode` varchar(45) DEFAULT NULL,
  `CropWechatKey` varchar(100) DEFAULT NULL,
  `CropWechatSecrectKey` varchar(100) DEFAULT NULL,
  `AddTime` varchar(45) NOT NULL,
  `AddBy` varchar(45) NOT NULL,
  `CropMobile` varchar(16) NOT NULL,
  `CropTel` varchar(16) DEFAULT NULL,
  `ContactName` varchar(45) NOT NULL,
  PRIMARY KEY (`CropId`),
  UNIQUE KEY `CropCode_UNIQUE` (`CropCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_course` (
  `CropId` char(36) NOT NULL,
  `CourseId` char(36) NOT NULL,
  `TeacherId` char(36) DEFAULT NULL,
  `CourseTitle` varchar(100) NOT NULL,
  `StartTime` datetime NOT NULL,
  `EndTime` datetime NOT NULL,
  `CoverImgId` char(36) NOT NULL,
  `MaxPerson` int(11) NOT NULL,
  `ProvinceId` int(11) NOT NULL,
  `CityId` int(11) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `X` float DEFAULT NULL,
  `Y` float DEFAULT NULL,
  `Sumarry` varchar(200) DEFAULT NULL,
  `Description` text,
  `Price` float NOT NULL DEFAULT '0',
  `Knowledge` text,
  `CourseStatus` int(11) NOT NULL DEFAULT '0',
  `AddTime` datetime NOT NULL,
  `AddBy` int(11) NOT NULL,
  PRIMARY KEY (`CropId`,`CourseId`),
  UNIQUE KEY `CourseId_UNIQUE` (`CourseId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_course_student` (
  `CropId` char(36) NOT NULL,
  `CourseId` char(36) NOT NULL,
  `StudentId` char(36) NOT NULL,
  `ChannelCode` varchar(45) DEFAULT NULL,
  `AuditStatus` int(11) NOT NULL DEFAULT '0',
  `AuditBy` char(36) DEFAULT NULL,
  `SignStatus` int(11) NOT NULL DEFAULT '0',
  `SignUrl` varchar(500) NOT NULL,
  `SignCount` varchar(45) NOT NULL DEFAULT '0',
  `AddTime` datetime NOT NULL,
  PRIMARY KEY (`CropId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_image` (
  `CropId` char(36) NOT NULL,
  `ImageId` char(36) NOT NULL,
  `Alt` varchar(200) NOT NULL,
  `Url` varchar(200) DEFAULT NULL,
  `Path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CropId`),
  UNIQUE KEY `ImageId_UNIQUE` (`ImageId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_lesson` (
  `CopId` char(36) NOT NULL,
  `CourseId` char(36) NOT NULL,
  `LessonId` varchar(45) NOT NULL,
  `LessonTitle` varchar(100) NOT NULL,
  `LessonSummary` varchar(200) NOT NULL,
  `LessonDesc` text,
  `VideoId` char(36) DEFAULT NULL,
  `AddTime` datetime NOT NULL,
  `AddBy` char(36) NOT NULL,
  PRIMARY KEY (`CopId`,`CourseId`,`LessonId`),
  UNIQUE KEY `LessonId_UNIQUE` (`LessonId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_page_view_log` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ChannelCode` char(8) NOT NULL,
  `FromUrl` varchar(100) NOT NULL,
  `FromIP` varchar(16) NOT NULL,
  `ClientAgent` varchar(500) NOT NULL,
  `ViewTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_student` (
  `CropId` char(36) NOT NULL,
  `StudentId` char(36) NOT NULL,
  `RealName` varchar(45) DEFAULT NULL,
  `NickName` varchar(45) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Mobile` varchar(16) NOT NULL,
  `Tel` varchar(16) DEFAULT NULL,
  `Email` varchar(150) NOT NULL,
  `Weixin` varchar(45) DEFAULT NULL,
  `QQ` varchar(45) DEFAULT NULL,
  `Weibo` varchar(45) DEFAULT NULL,
  `Tags` varchar(500) DEFAULT NULL,
  `Birthday` datetime DEFAULT NULL,
  `CropName` varchar(100) DEFAULT NULL,
  `JobTitle` varchar(200) NOT NULL,
  `Mark` varchar(45) DEFAULT NULL,
  `AddTime` datetime DEFAULT NULL,
  `AddBy` char(36) DEFAULT NULL,
  PRIMARY KEY (`CropId`,`StudentId`),
  UNIQUE KEY `StudentId_UNIQUE` (`StudentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_teach_album` (
  `CorpId` char(36) NOT NULL,
  `TeacherId` char(36) NOT NULL,
  `ImageId` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_teacher` (
  `CropId` char(36) NOT NULL,
  `TeacherId` char(36) NOT NULL,
  `AvatarId` char(36) NOT NULL,
  `NickName` varchar(45) NOT NULL,
  `RealName` varchar(45) NOT NULL,
  `Sex` char(1) NOT NULL,
  `LiveLocation` varchar(200) NOT NULL,
  `TeacherInfo` varchar(200) NOT NULL,
  `TeacherSummary` varchar(200) NOT NULL,
  `TeachDesc` text,
  `AddTime` datetime NOT NULL,
  `AddBy` char(36) DEFAULT NULL,
  PRIMARY KEY (`CropId`,`TeacherId`),
  UNIQUE KEY `TeacherId_UNIQUE` (`TeacherId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_trace` (
  `CropId` char(36) NOT NULL,
  `TraceId` char(36) NOT NULL,
  `TraceType` char(36) NOT NULL,
  `StudentId` char(36) NOT NULL,
  `CourseId` char(36) NOT NULL,
  `Remark` varchar(500) DEFAULT NULL,
  `TraceTime` datetime NOT NULL,
  PRIMARY KEY (`TraceId`,`CropId`),
  UNIQUE KEY `TraceId_UNIQUE` (`TraceId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_user` (
  `CropId` char(36) NOT NULL,
  `UserId` char(36) NOT NULL,
  `NickName` varchar(45) NOT NULL,
  `RealName` varchar(45) DEFAULT NULL,
  `Mobile` varchar(16) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Salt` varchar(45) NOT NULL,
  `AddTime` varchar(45) NOT NULL,
  `LoginCount` int(11) NOT NULL DEFAULT '0',
  `Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CropId`,`UserId`),
  UNIQUE KEY `UserId_UNIQUE` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `oc_video` (
  `CropId` char(36) NOT NULL,
  `VideoId` char(36) NOT NULL,
  `VideoPath` varchar(100) DEFAULT NULL,
  `VideoTitle` varchar(150) NOT NULL,
  `CoverPic` char(36) NOT NULL,
  `AddTime` datetime NOT NULL,
  `AddBy` char(36) NOT NULL,
  `VideoUrl` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CropId`,`VideoId`),
  UNIQUE KEY `VideoId_UNIQUE` (`VideoId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
