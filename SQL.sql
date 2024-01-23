-- Posts table
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    post_text TEXT NOT NULL,
    image_url VARCHAR(255),
    title VARCHAR(255),
    category VARCHAR(255),
    posted_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    price INT NOT NULL DEFAULT 1,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    display_name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    image_url VARCHAR(255),
    bio TEXT,
    price INT,
    created_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tips table
CREATE TABLE tips (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT,
    user_id INT,
    amount INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (post_id) REFERENCES posts(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS site_config (
    id INT AUTO_INCREMENT PRIMARY KEY,
    config_name VARCHAR(255) NOT NULL,
    config_value TEXT NOT NULL
);

INSERT INTO site_config (name, value) VALUES ('site_name', 'Friends4Sale');