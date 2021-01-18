-- DROP SCHEMA IF EXISTS weather_service
CREATE SCHEMA IF NOT EXISTS weather_service;

SET SQL_MODE='ALLOW_INVALID_DATES';

-- DROP TABLE IF EXISTS weather_service.group
CREATE TABLE IF NOT EXISTS weather_service.group
(
    id   SERIAL PRIMARY KEY,
    name VARCHAR(64) UNIQUE
);

-- DROP TABLE IF EXISTS weather_service.permission
CREATE TABLE IF NOT EXISTS weather_service.permission
(
    id   SERIAL PRIMARY KEY,
    name VARCHAR(64) UNIQUE
);

-- DROP TABLE IF EXISTS weather_service.group_permission
CREATE TABLE IF NOT EXISTS weather_service.group_permission
(
    group_id      BIGINT UNSIGNED NOT NULL,
    permission_id BIGINT UNSIGNED NOT NULL,


    FOREIGN KEY (group_id) REFERENCES weather_service.group (id),
    FOREIGN KEY (permission_id) REFERENCES weather_service.permission (id),
    PRIMARY KEY (group_id, permission_id)
);


-- DROP TABLE IF EXISTS weather_service.user
CREATE TABLE IF NOT EXISTS weather_service.user
(
    id         SERIAL PRIMARY KEY,
    group_id   BIGINT UNSIGNED NOT NULL,
    username   VARCHAR(32)        NOT NULL UNIQUE,
    password   TEXT            NOT NULL,
    salt       TEXT            NOT NULL,
    last_login TIMESTAMP       NOT NULL,
    created_at TIMESTAMP       NOT NULL DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (group_id) REFERENCES weather_service.group (id)
);

-- DROP TABLE IF EXISTS weather_service.user_search_data
CREATE TABLE IF NOT EXISTS weather_service.user_search_data
(
    id         SERIAL PRIMARY KEY,
    user_id    BIGINT UNSIGNED NOT NULL,
    longitude  FLOAT(10, 6)    NOT NULL,
    latitude   FLOAT(10, 6)    NOT NULL,
    begin_date TIMESTAMP       NOT NULL,
    end_date   TIMESTAMP       NOT NULL,
    created_at TIMESTAMP       NOT NULL DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id) REFERENCES weather_service.user (id)
);

-- DROP TABLE IF EXISTS weather_service.user_preference
CREATE TABLE IF NOT EXISTS weather_service.user_preference
(
    id      SERIAL PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    name    VARCHAR(32)        NOT NULL,
    value   TEXT            NOT NULL,

    FOREIGN KEY (user_id) REFERENCES weather_service.user (id),
    UNIQUE KEY user_id_name_key(user_id, name)
);

-- DROP TABLE IF EXISTS weather_service.user_dashboard
CREATE TABLE IF NOT EXISTS weather_service.user_dashboard
(
    id        SERIAL PRIMARY KEY,
    user_id   BIGINT UNSIGNED NOT NULL,
    longitude FLOAT(10, 6)    NOT NULL,
    latitude  FLOAT(10, 6)    NOT NULL,
    position  SMALLINT,

    FOREIGN KEY (user_id) REFERENCES weather_service.user (id)
);