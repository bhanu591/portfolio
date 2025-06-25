CREATE TABLE projects (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    description TEXT,
    image TEXT,
    technologies TEXT
);
CREATE TABLE testimonials (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    client TEXT NOT NULL,
    feedback TEXT NOT NULL
);
CREATE TABLE clients (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    logo TEXT
);
INSERT INTO projects (title, description, image, technologies) VALUES
('Sample Project 1', 'A responsive website', 'assets/img/project1.jpg', 'HTML, CSS, JS, PHP'),
('Sample Project 2', 'An ecommerce platform', 'assets/img/project2.jpg', 'PHP, MySQL, Bootstrap');
INSERT INTO testimonials (client, feedback) VALUES
('ACME Corp', 'Great work and fast delivery!'),
('Tech Co', 'Our go-to agency for web development.');
INSERT INTO clients (name, logo) VALUES
('ACME Corp', 'assets/img/client1.png'),
('Tech Co', 'assets/img/client2.png');
