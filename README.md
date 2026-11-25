# Barangay Document Request and Tracking System

A web-based system for managing barangay document requests and tracking their status.

## Features
- Resident registration and authentication
- Resident profile management
- Online document requests
- Document requirement uploads
- Request status tracking
- Notifications and email OTP verification
- Staff request management
- Security and activity logging

## User Roles
- Resident - Submits document requests and tracks their status.
- Staff - Processes and manages resident requests.
- Security Admin - Handles security monitoring and administration.

## Technologies
- PHP 8.2+
- MariaDB / MySQL
- HTML, CSS, and JavaScript
- Composer and PHPMailer

## Requirements
- XAMPP with PHP 8.2 or later
- MariaDB or MySQL
- Composer
- Web browser
- SMTP account for email features

## Installation

### 1. Clone the repository

git clone https://github.com/orange-13/BarangayDocumentSystem.git

### 2. Install dependencies

Run composer install inside the project directory.

### 3. Create the database

1. Start Apache and MySQL in XAMPP.
2. Open phpMyAdmin.
3. Create a database named barangay_document_system.
4. Import database/schema.sql.

The schema creates the required tables without actual resident records.

### 4. Configure the application

1. Copy config.sample.php and name the copy config.php.
2. Place the private configuration at C:\xampp\private\BarangayDocumentSystem\config.php.
3. Update the application URL, database settings, encryption key, and SMTP settings.
4. Never upload actual credentials to GitHub.

### 5. Open the application

http://localhost/BarangayDocumentSystem/

## Project Structure
- css/ - Stylesheets
- database/ - Database schema
- docs/ - Project documentation
- images/ - Image assets
- js/ - JavaScript files
- php/ - PHP application files
- scripts/ - Utility scripts
- uploads/ - Uploaded document storage
- index.php - Application entry point

## Documentation

See the docs/ directory for the acceptance checklist, development journal template, privacy notice draft, and security handout status.

## Security Notes
- Keep private configuration outside the public web directory.
- Never commit passwords, encryption keys, or SMTP credentials.
- Do not upload actual resident documents or personal information.
- Use HTTPS for public deployment.
- Maintain regular database backups.

## License

No license has been specified. All rights reserved by the project owner.
