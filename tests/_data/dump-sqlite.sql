PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE user_profile (id INTEGER NOT NULL, user_id INTEGER DEFAULT NULL, first_name VARCHAR(255) NOT NULL, middle_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, job_title VARCHAR(255) NOT NULL, salary NUMERIC(10, 0) NOT NULL, receive_mailing BOOLEAN NOT NULL, PRIMARY KEY(id));
INSERT INTO "user_profile" VALUES(1,1,'Tim','tee','Timson','Sales guy',30000,1);
INSERT INTO "user_profile" VALUES(2,2,'Bill','lee','Blueshoes','Programmer',60000,1);
INSERT INTO "user_profile" VALUES(3,3,'Donald','Walt','Duck','Chief Duck',120000,0);
CREATE TABLE fos_user (id INTEGER NOT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled BOOLEAN NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked BOOLEAN NOT NULL, expired BOOLEAN NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles CLOB NOT NULL, credentials_expired BOOLEAN NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, PRIMARY KEY(id));
INSERT INTO "fos_user" VALUES(1,'timmy','timmy','timmy@timson.net','timmy@timson.net',0,'8mp7xr76wogswos4gksok08gc04g4o0','gc+aGpW3JB05pvV6TtIrtTGkmPyPtEShP4n7g302yN0a6cjsHuQ1f5kN0/tPNOpB2WgCVBbCKpYQJu+7+kUssA==',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL);
INSERT INTO "fos_user" VALUES(2,'billy','billy','billy@bluehat.org','billy@bluehat.org',0,'g8lfeiz4w4ggwww08o4oos0co4owgoo','wP7t31DaRyOaliM/syPpYyve7e02EgK/DD2JH5tUpdCKv4UNh6b4aXSNQTQVcivqCCTPIH23RUCve3J18ldlGQ==',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL);
INSERT INTO "fos_user" VALUES(3,'donald','donald','donald@duck.co.uk','donald@duck.co.uk',0,'78hcd38ijq0wskocwswcwc0owg0wgw4','TUb7oRK9pYGWqaqXapFSWCs+JkeDl+JeZRtcc0SGyUf9efWxIlxaz/FLJHVzsNLoh5e6Hmy/CxjPqWX58j0Kkg==',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL);
CREATE UNIQUE INDEX UNIQ_D95AB405A76ED395 ON user_profile (user_id);
CREATE UNIQUE INDEX UNIQ_957A647992FC23A8 ON fos_user (username_canonical);
CREATE UNIQUE INDEX UNIQ_957A6479A0D96FBF ON fos_user (email_canonical);
COMMIT;