CREATE TABLE tasks
(
    id          int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name        TINYTEXT                           NOT NULL,
    description TEXT                               NULL     DEFAULT '',
    completed   BOOLEAN                            NOT NULL DEFAULT 0,
    created_at  TINYTEXT                           NULL     DEFAULT CURRENT_TIMESTAMP
);