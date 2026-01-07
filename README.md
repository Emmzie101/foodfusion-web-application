**FoodFusion – Community Culinary Web Platform
Project Overview**

FoodFusion is a full-stack community-driven web platform designed to connect food lovers through shared recipes, culinary resources, and cultural storytelling.

**Key Features**
User authentication (registration & login)

Community cookbook with posts, likes, and comments

Recipe collection with downloadable resources

Culinary and educational resource library

Secure contact form with reCAPTCHA

Responsive, modern UI design

**Technologies Used**
Frontend: HTML5, CSS3, JavaScript

Backend: PHP (PDO)

Database: MySQL

Security: Password hashing, prepared statements, sessions

Version Control: Git & GitHub

**Security Features**
Password encryption using password_hash()

SQL injection prevention via prepared statements

Session-based authentication

File upload validation

Google reCAPTCHA integration

**Database Setup**
Import database/foodfusion.sql into MySQL

Update database credentials in config/db.php

Ensure required tables exist:

users

posts

comments

post_likes

resources

contact_messages

Installation Instructions
git clone https://github.com/EmmZie101/foodfusion-web-application.git
cd foodfusion-web-application


Place project in htdocs (XAMPP)

Start Apache & MySQL

Access via http://localhost/foodfusion
