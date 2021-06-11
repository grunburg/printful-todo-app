CREATE TABLE IF NOT EXISTS tasks
(
    id          int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name        TINYTEXT                           NOT NULL,
    description TEXT                                        DEFAULT(''),
    completed   BOOLEAN                            NOT NULL DEFAULT false,
    created_at  TINYTEXT                                    DEFAULT(CURRENT_TIMESTAMP)
);