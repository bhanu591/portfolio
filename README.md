# Coding Agency Website

This project is a sample coding agency website built with pure PHP. It demonstrates a modular structure, responsive design with gradient backgrounds, and simple animations using AOS.

## Requirements
- PHP 7.4+
- SQLite3

## Setup
1. Install PHP and SQLite3.
2. Create the SQLite database and load demo data:
   ```bash
   sqlite3 data/database.sqlite < data/setup.sql
   ```
3. Start the PHP development server:
   ```bash
   php -S localhost:8000
   ```
4. Visit `http://localhost:8000/index.php` in your browser.

The contact form will attempt to send email using the `mail()` function. Configure PHP accordingly or adjust as needed.
