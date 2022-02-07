CREATE TABLE persons (
 userid int(11) NOT NULL,
 role varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 username varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 credits int(11) DEFAULT NULL,
 time int(11) DEFAULT NULL,
 UNIQUE KEY userid (userid),
 UNIQUE KEY username (username)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci