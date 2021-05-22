DROP TABLE tb_daily_attendance;

CREATE TABLE `tb_daily_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `staff` varchar(255) NOT NULL,
  `typeOfTransaction` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_daily_attendance VALUES("1","8:35 PM","5/12/2021","Employee123","Receive Product","Hanabisihi","Washing Machine","15");



DROP TABLE tbl_audit_trail;

CREATE TABLE `tbl_audit_trail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `timein` varchar(255) NOT NULL,
  `timeout` varchar(255) DEFAULT NULL,
  `activity` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_audit_trail VALUES("1","admin","Ordep","Badeo","Labrador","12:46 am","12:47 am","Logged In","May 7, 2021");
INSERT INTO tbl_audit_trail VALUES("2","admin","Ordep","Badeo","Labrador","12:47 am","12:54 am","Logged In","May 7, 2021");
INSERT INTO tbl_audit_trail VALUES("3","admin","Ordep","Badeo","Labrador","12:54 am","12:54 am","Logged In","May 7, 2021");
INSERT INTO tbl_audit_trail VALUES("4","admin","Ordep","Badeo","Labrador","10:57 am","12:22 pm","Logged In","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("5","admin","Ordep","Badeo","Labrador","12:19 pm","12:22 pm","Uploaded image in gallery","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("6","admin","Ordep","Badeo","Labrador","12:20 pm","12:22 pm","Uploaded image in gallery","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("7","admin","Ordep","Badeo","Labrador","12:23 pm","02:35 pm","Logged In","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("8","admin","Ordep","Badeo","Labrador","12:38 pm","02:35 pm","Registered user to the system","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("9","admin","Ordep","Badeo","Labrador","12:49 pm","02:35 pm","Search Product to the inventory","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("10","admin","Ordep","Badeo","Labrador","02:36 pm","02:50 pm","Logged In","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("11","admin","Ordep","Badeo","Labrador","02:50 pm","02:50 pm","Logged In","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("12","admin","Ordep","Badeo","Labrador","02:50 pm","02:59 pm","Logged In","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("13","admin","Ordep","Badeo","Labrador","02:56 pm","02:59 pm","Logged In","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("14","admin","Ordep","Badeo","Labrador","03:00 pm","11:00 pm","Logged In","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("15","admin","Ordep","Badeo","Labrador","08:33 pm","11:00 pm","Logged In","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("16","admin","Ordep","Badeo","Labrador","10:40 pm","11:00 pm","Search Product to the inventory","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("17","admin","Ordep","Badeo","Labrador","10:56 pm","11:00 pm","Search Product to the inventory","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("18","admin","Ordep","Badeo","Labrador","10:56 pm","11:00 pm","Search Product to the inventory","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("19","admin","Ordep","Badeo","Labrador","10:56 pm","11:00 pm","Search Product to the inventory","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("20","admin","Ordep","Badeo","Labrador","11:00 pm","11:00 pm","Searched user or product","May 9, 2021");
INSERT INTO tbl_audit_trail VALUES("21","admin","Ordep","Badeo","Labrador","09:56 pm","11:26 pm","Logged In","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("22","admin","Ordep","Badeo","Labrador","10:03 pm","11:26 pm","Registered Product","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("23","admin","Ordep","Badeo","Labrador","10:18 pm","11:26 pm","Searched user or product","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("24","admin","Ordep","Badeo","Labrador","10:32 pm","11:26 pm","Search Product to the inventory","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("25","admin","Ordep","Badeo","Labrador","10:33 pm","11:26 pm","Search Product to the inventory","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("26","admin","Ordep","Badeo","Labrador","10:33 pm","11:26 pm","Input New Incoming Product","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("27","admin","Ordep","Badeo","Labrador","10:39 pm","11:26 pm","Input New Incoming Product","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("28","admin","Ordep","Badeo","Labrador","10:39 pm","11:26 pm","Input New Incoming Product","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("29","admin","Ordep","Badeo","Labrador","10:57 pm","11:26 pm","Searched in Sales and Purchase","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("30","admin","Ordep","Badeo","Labrador","11:00 pm","11:26 pm","Searched in Sales and Purchase","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("31","admin","Ordep","Badeo","Labrador","11:00 pm","11:26 pm","Searched in Sales and Purchase","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("32","admin","Ordep","Badeo","Labrador","11:00 pm","11:26 pm","Searched in Sales and Purchase","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("33","admin","Ordep","Badeo","Labrador","11:02 pm","11:26 pm","Searched in Sales and Purchase","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("34","admin","Ordep","Badeo","Labrador","11:02 pm","11:26 pm","Searched in Sales and Purchase","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("35","admin","Ordep","Badeo","Labrador","11:03 pm","11:26 pm","Searched user or product","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("36","admin","Ordep","Badeo","Labrador","10:14 pm","11:26 pm","Logged In","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("37","admin","Ordep","Badeo","Labrador","10:14 pm","11:26 pm","Searched in Sales and Purchase","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("38","admin","Ordep","Badeo","Labrador","10:14 pm","11:26 pm","Searched in Sales and Purchase","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("39","admin","Ordep","Badeo","Labrador","10:14 pm","11:26 pm","Search Product to the inventory","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("40","admin","Ordep","Badeo","Labrador","10:14 pm","11:26 pm","Search Product to the inventory","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("41","admin","Ordep","Badeo","Labrador","10:14 pm","11:26 pm","Searched user or product","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("42","admin","Ordep","Badeo","Labrador","10:22 pm","11:26 pm","Searched user or product","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("43","admin","Ordep","Badeo","Labrador","11:26 pm","11:41 pm","Logged In","May 11, 2021");
INSERT INTO tbl_audit_trail VALUES("44","admin","Ordep","Badeo","Labrador","11:41 pm","08:09 pm","Logged In","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("45","admin","Ordep","Badeo","Labrador","11:45 pm","08:09 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("46","admin","Ordep","Badeo","Labrador","11:45 pm","08:09 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("47","admin","Ordep","Badeo","Labrador","12:00 am","08:09 pm","Input New Outgoing Product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("48","admin","Ordep","Badeo","Labrador","12:06 am","08:09 pm","Input New Outgoing Product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("49","admin","Ordep","Badeo","Labrador","12:07 am","08:09 pm","Input New Outgoing Product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("50","admin","Ordep","Badeo","Labrador","09:31 am","08:09 pm","Logged In","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("51","admin","Ordep","Badeo","Labrador","09:32 am","08:09 pm","Searched in Sales and Purchase","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("52","admin","Ordep","Badeo","Labrador","09:32 am","08:09 pm","Searched in Sales and Purchase","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("53","admin","Ordep","Badeo","Labrador","07:29 pm","08:09 pm","Logged In","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("54","admin","Ordep","Badeo","Labrador","08:10 pm","08:11 pm","Logged In","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("55","admin","Ordep","Badeo","Labrador","08:12 pm","09:52 pm","Logged In","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("56","admin","Ordep","Badeo","Labrador","08:15 pm","09:52 pm","Registered user to the system","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("57","admin","Ordep","Badeo","Labrador","08:54 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("58","admin","Ordep","Badeo","Labrador","08:54 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("59","admin","Ordep","Badeo","Labrador","08:54 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("60","admin","Ordep","Badeo","Labrador","08:56 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("61","admin","Ordep","Badeo","Labrador","08:56 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("62","admin","Ordep","Badeo","Labrador","08:56 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("63","admin","Ordep","Badeo","Labrador","08:56 pm","09:52 pm","Search Product to the inventory","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("64","admin","Ordep","Badeo","Labrador","08:56 pm","09:52 pm","Search Product to the inventory","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("65","admin","Ordep","Badeo","Labrador","08:57 pm","09:52 pm","Search Product to the inventory","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("66","admin","Ordep","Badeo","Labrador","08:57 pm","09:52 pm","Search Product to the inventory","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("67","admin","Ordep","Badeo","Labrador","08:57 pm","09:52 pm","Search Product to the inventory","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("68","admin","Ordep","Badeo","Labrador","08:57 pm","09:52 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("69","admin","Ordep","Badeo","Labrador","08:57 pm","09:52 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("70","admin","Ordep","Badeo","Labrador","08:57 pm","09:52 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("71","admin","Ordep","Badeo","Labrador","08:57 pm","09:52 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("72","admin","Ordep","Badeo","Labrador","08:58 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("73","admin","Ordep","Badeo","Labrador","08:58 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("74","admin","Ordep","Badeo","Labrador","08:58 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("75","admin","Ordep","Badeo","Labrador","08:58 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("76","admin","Ordep","Badeo","Labrador","08:59 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("77","admin","Ordep","Badeo","Labrador","08:59 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("78","admin","Ordep","Badeo","Labrador","08:59 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("79","admin","Ordep","Badeo","Labrador","09:01 pm","09:52 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("80","admin","Ordep","Badeo","Labrador","09:24 pm","09:52 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("81","admin","Ordep","Badeo","Labrador","09:24 pm","09:52 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("82","admin","Ordep","Badeo","Labrador","09:24 pm","09:52 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("83","admin","Ordep","Badeo","Labrador","09:24 pm","09:52 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("84","admin","Ordep","Badeo","Labrador","09:26 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("85","admin","Ordep","Badeo","Labrador","09:26 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("86","admin","Ordep","Badeo","Labrador","09:26 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("87","admin","Ordep","Badeo","Labrador","09:26 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("88","admin","Ordep","Badeo","Labrador","09:27 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("89","admin","Ordep","Badeo","Labrador","09:27 pm","09:52 pm","Searched in daily attendance","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("90","admin","Ordep","Badeo","Labrador","09:33 pm","09:52 pm","Searched user or product","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("91","admin","Ordep","Badeo","Labrador","09:45 pm","09:52 pm","Searched in audit trail","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("92","admin","Ordep","Badeo","Labrador","09:46 pm","09:52 pm","Searched in audit trail","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("93","admin","Ordep","Badeo","Labrador","09:47 pm","09:52 pm","Searched in audit trail","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("94","admin","Ordep","Badeo","Labrador","09:48 pm","09:52 pm","Searched in audit trail","May 12, 2021");
INSERT INTO tbl_audit_trail VALUES("95","admin","Ordep","Badeo","Labrador","05:16 pm","05:43 pm","Logged In","May 16, 2021");
INSERT INTO tbl_audit_trail VALUES("96","admin","Ordep","Badeo","Labrador","05:41 pm","05:43 pm","Logged In","May 16, 2021");
INSERT INTO tbl_audit_trail VALUES("97","admin","Ordep","Badeo","Labrador","05:43 pm","05:44 pm","Logged In","May 16, 2021");
INSERT INTO tbl_audit_trail VALUES("98","admin","Ordep","Badeo","Labrador","05:50 pm","","Logged In","May 16, 2021");
INSERT INTO tbl_audit_trail VALUES("99","admin","Ordep","Badeo","Labrador","05:53 pm","","Backup Database","May 16, 2021");



DROP TABLE tbl_billing;

CREATE TABLE `tbl_billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




DROP TABLE tbl_gallery;

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_gallery VALUES("1","07LeRLO9rbj6luakpZvMVvg-1.1602529741.fit_lpad.size_625x365.jpg");
INSERT INTO tbl_gallery VALUES("2","blender.jpeg");
INSERT INTO tbl_gallery VALUES("3","SKU_36950_grande.jpg");
INSERT INTO tbl_gallery VALUES("4","stove.jpeg");
INSERT INTO tbl_gallery VALUES("5","washing-machine.jpeg");
INSERT INTO tbl_gallery VALUES("6","download.jpg");
INSERT INTO tbl_gallery VALUES("7","cdfa61cff4685276dbad0c446208d426.jpg");



DROP TABLE tbl_incoming_product;

CREATE TABLE `tbl_incoming_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `quantity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_incoming_product VALUES("1","Hanabisihi","Washing Machine","","2021-05-21","5");
INSERT INTO tbl_incoming_product VALUES("2","Samsung","Air Conditioner","","2021-05-22","15");
INSERT INTO tbl_incoming_product VALUES("3","Hanabisihi","Washing Machine","","2021-05-29","10");
INSERT INTO tbl_incoming_product VALUES("4","Panasonic","Washing Machine","NA-V10FX1LP1","2021-05-27","10");
INSERT INTO tbl_incoming_product VALUES("5","Hanabisihi","Washing Machine","","2021-05-27","20");



DROP TABLE tbl_outgoing_product;

CREATE TABLE `tbl_outgoing_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(255) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `store` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_outgoing_product VALUES("1","20368975","Samsung","Refrigerator","VS2800G2D20K40484","2021-05-26","5","Quezon City");
INSERT INTO tbl_outgoing_product VALUES("3","76510983","Samsung","Washing Machine","WR24M9960KV/TC","2021-05-22","5","Quezon City");



DROP TABLE tbl_product;

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` varchar(50) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_product VALUES("1","20368975","Samsung","Refrigerator","VS2800G2D20K40484","Black","8","24,000.00");
INSERT INTO tbl_product VALUES("2","76510983","Samsung","Washing Machine","WR24M9960KV/TC","Black","15","15,000.00");
INSERT INTO tbl_product VALUES("3","08276194","Samsung","Refrigerator","RT51K6351BS/TC","Black","10","20,000.00");
INSERT INTO tbl_product VALUES("4","20368976","Hanabisihi","Washing Machine","VS2800G2D20K40485","White","15","25,000.00");



DROP TABLE tbl_product_store;

CREATE TABLE `tbl_product_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` varchar(50) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `store` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_product_store VALUES("1","20368975","Samsung","Refrigerator","VS2800G2D20K40484","8","black","24,000.00","Quezon City");



DROP TABLE tbl_sales_and_purchase;

CREATE TABLE `tbl_sales_and_purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeOfTransaction` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_sales_and_purchase VALUES("1","Purchase","2021-05-21","Hanabishi","Washing Machine","15","24,000.00");
INSERT INTO tbl_sales_and_purchase VALUES("2","Sales","2021-05-21","Hanabishi","Refrigerator","15","24,000.00");



DROP TABLE tbl_user;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `birthdate` date NOT NULL,
  `contactnumber` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `loa` varchar(20) NOT NULL,
  `store` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_user VALUES("1","admin","admin","Ordep","Badeo","Labrador","Antipolo City","1996-03-05","09565290841","jhaycee122098@gmail.com","Administrator","");
INSERT INTO tbl_user VALUES("2","JBevangelista","jV67#%","Jan Bernard","Evangelista","Espiritu","28 Sta. Maria Compd. Santolan, Pasig City","1997-01-07","09276928641","jbevangelista07@gmail.com","Employee","");
INSERT INTO tbl_user VALUES("3","JepCureg","vJ64%)","Jordan Jeffrey","Cureg","You wanna know why","Antipolo City","1997-01-04","09565290842","jepcureg@gmail.com","Branch","Quezon City");
INSERT INTO tbl_user VALUES("4","Employee123","DZ72*(","Jan Christan","Evangelista","Espiritu","28 Sta. Maria Compd. Santolan, Pasig City","1999-12-20","09265944316","ordepbadeo143@gmail.com","Employee","");
INSERT INTO tbl_user VALUES("5","16001669900","sW40!#","Dayle","Sacopanio","Reyes","Marikina City","1995-07-08","09265944317","daylesacopanio@gmail.com","Employee","");
INSERT INTO tbl_user VALUES("6","16001669901","Nm21)$","Blaize","Faylon","Secret","Laguna","1990-12-12","09265944319","blaize.faylon50@gmail.com","Employee","");



