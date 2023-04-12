CREATE TABLE ccCountry(
	countryId int not null PRIMARY KEY AUTO_INCREMENT,
    countryName varchar(255) not null,
    countryCode varchar(255) not null  
);

CREATE TABLE ccCountryCurrency(
	currencyId int not null PRIMARY KEY AUTO_INCREMENT,
    countryId int,
    currencyRate double, 
    dateOfRate timestamp DEFAULT CURRENT_TIMESTAMP,
    FOREIGN key(countryId) REFERENCES ccCountry(countryId)
);
