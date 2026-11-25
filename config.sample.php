<?php
declare(strict_types=1);

return [
    // Application URL
    'app_url' => 'http://localhost/BarangayDocumentSystem',

    // Database configuration
    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'name' => 'your_database_name',
        'username' => 'your_database_username',
        'password' => 'your_database_password',
        'charset' => 'utf8mb4',
    ],

    // Application encryption key
    'encryption_key' => 'REPLACE_WITH_A_SECURE_RANDOM_KEY',

    // SMTP email configuration
    'mail' => [
        'host' => 'smtp.example.com',
        'port' => 587,
        'username' => 'your_email_username',
        'password' => 'your_email_password',
        'from_email' => 'noreply@example.com',
        'from_name' => 'Barangay Document System',
    ],
];