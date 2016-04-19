drop database if exists aryadynamic;
create database aryadynamic;
use aryadynamic;

create table users
(
	username varchar(32) primary key,
	password varchar(32) not null,
	name varchar(32) not null
);

create table articles
(
	id int primary key auto_increment,
	heading varchar(256) not null,
	summary varchar(1024),
	body text not null,
	author varchar(32) not null,
	createdOn datetime,
	type int not null,
	category varchar(128)
);

create table primaryDownloads
(
	id int primary key auto_increment,
	label varchar(64) not null,
	releaseId int not null,
	downloadLink varchar(256) not null,
	releaseNotes text not null,
	downloadButtonClass varchar(16) not null,
	isActive int not null
);

create table releases
(
	id int primary key auto_increment,
	name varchar(32) not null,
	createdDate datetime not null,
	summary text not null,
	codename varchar(64) not null,
	isActive int not null
);

create table allDownloads
(
	id int primary key auto_increment,
	releaseId int not null,
	label varchar(32) not null,
	link varchar(128) not null,
	isActive int not null
);

create table packages
(
	id int primary key auto_increment,
	categoryId int not null,
	name varchar(64) not null,
	isPackage int not null,
	isInstallable int not null,
	notes text,
	isBinary int,
	requiredDependencies varchar(1024),
	recommendedDependencies varchar(1024),
	optionalDependencies varchar(1024),
	scriptLink varchar(256)
);

create table packageReleases
(
	id int primary key auto_increment,
	packageId int not null,
	releaseId int not null,
	version varchar(16)
);

create table banners
(
	id int primary key auto_increment,
	heading varchar(1024) not null,
	body text not null,
	imageUrl varchar(64) not null
);

create table roadmap
(
	id int primary key auto_increment,
	status int not null,
	tentativeDate datetime not null,
	task varchar(1024) not null
);
