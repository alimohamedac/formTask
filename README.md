Final Inspection Aluminum Web Form

#Project Overview

This project is a Laravel-based web application designed to manage aluminum inspection records. It enables users to create, read, update, and delete (CRUD) inspection records, which are stored in a database. Each inspection record is created based on a provided template, reflecting various inspection parameters.

#Features
- CRUD Operations: Users can add, view, update, and delete inspection records.
- Validation: All fields are validated according to their data types and requirements.
- Repository Pattern: Used to organize code and separate data handling logic from controller methods.
- User-Friendly Interface: Intuitive forms and views to facilitate inspection management.

#Installation
1 - git clone <repositoryUrl>
cd inspectionForm
2 - composer install
3 -  Copy .env.example to .env and update it
4 - php artisan key:generate
5 - php artisan serve

# Database Schema Design

# Approach and Thought Process
- Repository Pattern.
- Form Validation.
- User Experience.

# Assumptions
- Fields like visual_check, color_match, coating_thickness are stored as booleans to mark pass/fail status.
- signature.

# Challenges
- Balancing simplicity with functionality in the form design, ensuring it’s intuitive for users without sacrificing data quality.
- Managing nullable fields (approved_by, signature) in the migration to support optional values.

# Usage
- CRUD Operations

#Testing
- Test validation by trying to submit forms with incomplete or incorrect data.
- Verify CRUD functionality to ensure data is added, displayed, updated, and removed as expected.

#Contributing
Contributions are welcome. Feel free to fork the repository and make a pull request.

#License
This project is licensed under the MIT License.
