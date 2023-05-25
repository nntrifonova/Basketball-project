CREATE DATABASE IF NOT EXISTS `my_database`;

CREATE TABLE my_database.posts (
   post_id INTEGER NOT NULL AUTO_INCREMENT,
   title VARCHAR(100),
   text VARCHAR (3000),
   image BLOB,
   date DATETIME,

   PRIMARY KEY (post_id));

CREATE TABLE my_database.tags (
    tag_id INTEGER NOT NULL AUTO_INCREMENT,
    text VARCHAR (250),

    PRIMARY KEY (tag_id));

CREATE TABLE my_database.posts_tags (
    post_tag_id INTEGER NOT NULL AUTO_INCREMENT,
    post_id INTEGER,
    tag_id INTEGER,
    PRIMARY KEY (post_tag_id),
    FOREIGN KEY (tag_id) REFERENCES  tags(tag_id),
    FOREIGN KEY (post_id) REFERENCES  posts(post_id));

INSERT INTO my_database.posts (post_id, title, text, image, date)
VALUES (1, 'New post', 'Today You can find here a new post', null, null);