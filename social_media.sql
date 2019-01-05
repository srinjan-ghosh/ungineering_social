CREATE DATABASE social_media;
USE social_media;
CREATE TABLE users(
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        collage VARCHAR(255),
        phone_number VARCHAR(255),
        PRIMARY KEY (id)
);
CREATE TABLE status_updates(
        id INT NOT NULL AUTO_INCREMENT,
        user_id INT NOT NULL,
        email VARCHAR(255) NOT NULL,
        date_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        status VARCHAR(255) NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (user_id) REFERENCES users (id)        
);
ALTER TABLE users ADD UNIQUE (email);
ALTER TABLE status_updates ADD UNIQUE (email);
        
        
        
