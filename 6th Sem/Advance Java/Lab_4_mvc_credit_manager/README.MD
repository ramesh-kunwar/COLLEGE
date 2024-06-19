# Create Database

```sql

create database lab_4_mvc_credit_manager;

use lab_4_mvc_credit_manager;

create table customer(
    customer_id int not null primary key auto_increment,
    full_name varchar(255) not null,
    dob date not null,
    address varchar(255) not null,
    annual_income double,
    income_source varchar(255) not null,
    property_valuation double,
    property_type varchar(255) not null,
    valuation_date date,
    credit_type varchar(255) not null,
    is_eligible boolean default false,
    credit_amount double,
    credit_status varchar(255),
    applied_at timestamp default current_timestamp,
    verified_at timestamp null

 );

  create table admin(
    admin_id int not null primary key auto_increment,
    admin_username varchar(255) not null unique,
    admin_password varchar(255) not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp null
);



```
