CREATE  TABLE Article (
  id INT NOT NULL AUTO_INCREMENT ,
  theme VARCHAR(255) NOT NULL ,
  text TEXT NULL ,
  PRIMARY KEY (id) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE Comment (
  id INT NOT NULL AUTO_INCREMENT ,
  user_name VARCHAR(255) NOT NULL ,
  user_email TEXT NOT NULL ,
  text VARCHAR(45) NOT NULL ,
  PRIMARY KEY (id) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE ArticleComment (
  id INT NOT NULL AUTO_INCREMENT ,
  article_id INT NOT NULL ,
  comment_id INT NOT NULL ,
  comment_parent_id INT NULL DEFAULT 0 ,
  PRIMARY KEY (id) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

-- CREATE  TABLE ArticlesComments (
--   id INT NOT NULL ,
--   article_id INT NOT NULL ,
--   comment_id INT NOT NULL ,
--   comment_parent_id INT NULL ,
--   PRIMARY KEY (id) ,
--   INDEX fk_ArticlesComments_1 (article_id ASC) ,
--   INDEX fk_ArticlesComments_2 (comment_id ASC) ,
--   INDEX fk_ArticlesComments_3 (comment_parent_id ASC) ,
--   CONSTRAINT fk_ArticlesComments_1
--     FOREIGN KEY (article_id )
--     REFERENCES Articles (id )
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT fk_ArticlesComments_2
--     FOREIGN KEY (comment_id )
--     REFERENCES Comments (id )
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT fk_ArticlesComments_3
--     FOREIGN KEY (comment_parent_id )
--     REFERENCES Comments (id )
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION);
