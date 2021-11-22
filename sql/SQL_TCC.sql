CREATE DATABASE TCC_DataBase;

USE TCC_DataBase;

CREATE TABLE user_tb (
	user_cd INT AUTO_INCREMENT NOT NULL,
    email_ds VARCHAR(250) NOT NULL UNIQUE,
    password_ds VARCHAR(75) NOT NULL,
    user_nm VARCHAR(250) NOT NULL,
    birthDate_dt DATE NOT NULL,
    phoneNumber_ds VARCHAR(15) NOT NULL UNIQUE,
    cpf_ds VARCHAR(75) NOT NULL UNIQUE,
    user_st VARCHAR(2),
    accountStatus_dt DATETIME NOT NULL,
    PRIMARY KEY (user_cd)
);

CREATE TABLE tag_tb (
	tag_cd INT AUTO_INCREMENT NOT NULL,
    tag_nm VARCHAR(25) NOT NULL,
    PRIMARY KEY (tag_cd)
);

CREATE TABLE sellerProfile_tb (
	sellerProfile_cd INT AUTO_INCREMENT NOT NULL,
    sellerProfile_nm VARCHAR(25) NOT NULL,
    description_ds VARCHAR(750),
    PRIMARY KEY (sellerprofile_cd),
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user_tb (user_cd) ON DELETE CASCADE
);

CREATE TABLE productService_tb (
	productService_cd INT AUTO_INCREMENT NOT NULL,
    productService_nm VARCHAR(250) NOT NULL,
    productService_ds VARCHAR(750) NOT NULL,
    price_vl DECIMAL(10,2),
    pricePer_ds VARCHAR(25),
    PRIMARY KEY (productService_cd),
    sellerProfile_id INT NOT NULL,
	FOREIGN KEY (sellerProfile_id) REFERENCES sellerProfile_tb (sellerProfile_cd) ON DELETE CASCADE
);

CREATE TABLE message_tb (
	message_cd INT AUTO_INCREMENT NOT NULL,
    message_ds TEXT NOT NULL,
    messageImage_ds VARCHAR(1000),
    message_dt DATETIME NOT NULL,
    PRIMARY KEY (message_cd),
    user_id INT NOT NULL,
	FOREIGN KEY (user_id) REFERENCES user_tb (user_cd) ON DELETE CASCADE,
	sellerProfile_id INT NOT NULL,
	FOREIGN KEY (sellerProfile_id) REFERENCES sellerProfile_tb (sellerProfile_cd) ON DELETE CASCADE
);

CREATE TABLE address_tb (
	address_cd INT AUTO_INCREMENT NOT NULL,
    cep_ds VARCHAR(9) NOT NULL,
    road_nm VARCHAR(250) NOT NULL,
    number_ds VARCHAR(250) NOT NULL,
    district_nm VARCHAR(250) NOT NULL,
    city_nm VARCHAR(250) NOT NULL,
    state_sg VARCHAR(2) NOT NULL,
    complement_ds VARCHAR(250),
    latitude_ds DECIMAL(10,8) NOT NULL,
    longitude_ds DECIMAL(11,8) NOT NULL,
    PRIMARY KEY (address_cd),
    user_id INT,
	FOREIGN KEY (user_id) REFERENCES user_tb (user_cd) ON DELETE CASCADE,
	sellerProfile_id INT,
	FOREIGN KEY (sellerProfile_id) REFERENCES sellerProfile_tb (sellerProfile_cd) ON DELETE CASCADE
);

CREATE TABLE image_tb (
	image_cd INT AUTO_INCREMENT NOT NULL,
    image_ds VARCHAR(1000) NOT NULL,
    PRIMARY KEY (image_cd),
    user_id INT,
	FOREIGN KEY (user_id) REFERENCES user_tb (user_cd),
    sellerProfile_id INT,
	FOREIGN KEY (sellerProfile_id) REFERENCES sellerProfile_tb (sellerProfile_cd),
	productService_id INT,
    FOREIGN KEY (productService_id) REFERENCES productService_tb (productService_cd)
);

CREATE TABLE tag_user_tb (
	tag_id INT NOT NULL,
    user_id INT NOT NULL,
    PRIMARY KEY (tag_id, user_id),
    FOREIGN KEY (tag_id) REFERENCES tag_tb (tag_cd),
    FOREIGN KEY (user_id) REFERENCES user_tb (user_cd)
);

CREATE TABLE sellerProfile_tag_tb (
	sellerProfile_id INT NOT NULL,
    tag_id INT NOT NULL,
    PRIMARY KEY (sellerProfile_id, tag_id),
    FOREIGN KEY (sellerProfile_id) REFERENCES sellerProfile_tb (sellerProfile_cd),
    FOREIGN KEY (tag_id) REFERENCES tag_tb (tag_cd)
);

CREATE TABLE productService_tag_tb (
	productService_id INT NOT NULL,
   	tag_id INT NOT NULL,
    PRIMARY KEY (productService_id, tag_id),
    FOREIGN KEY (productService_id) REFERENCES productService_tb (productService_cd),
	FOREIGN KEY (tag_id) REFERENCES tag_tb (tag_cd)
);

CREATE TABLE user_rating_sellerProfile_tb (
	rating_cd INT AUTO_INCREMENT NOT NULL,
    rating_vl DECIMAL(1,1) NOT NULL,
    rating_ds VARCHAR(250),
    PRIMARY KEY (rating_cd),
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user_tb (user_cd),
    sellerProfile_id INT NOT NULL,
    FOREIGN KEY (sellerProfile_id) REFERENCES sellerProfile_tb (sellerProfile_cd)
);

CREATE TABLE sellerProfile_rating_user_tb (
	rating_cd INT AUTO_INCREMENT NOT NULL,
    rating_vl DECIMAL(1,1) NOT NULL,
    rating_ds VARCHAR(250),
    PRIMARY KEY (rating_cd),
    sellerProfile_id INT NOT NULL,
    FOREIGN KEY (sellerProfile_id) REFERENCES sellerProfile_tb (sellerProfile_cd),
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user_tb (user_cd)
);

CREATE TABLE user_rating_productService_tb (
	rating_cd INT AUTO_INCREMENT NOT NULL,
    rating_vl DECIMAL(1,1) NOT NULL,
    rating_ds VARCHAR(250),
    PRIMARY KEY (rating_cd),
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user_tb (user_cd),
    productService_id INT NOT NULL,
    FOREIGN KEY (productService_id) REFERENCES productService_tb (productService_cd)
);