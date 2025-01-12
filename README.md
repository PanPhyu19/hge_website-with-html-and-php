# hge_website-with-html-and-php
# Instructions to Run the Project
This website is developed using PHP, HTML, CSS, and JavaScript, so it requires a local server to run on your device. Follow the steps below to set up and run the project:

1. Install a Local Server.
   
Download and install XAMPP (or similar software that includes Apache and MySQL).

Start the Apache and MySQL services from the XAMPP control panel.

2. Set Up the Project Files.
   
Place the program files in the htdocs directory of XAMPP.

Typically, this folder is located at C:\xampp\htdocs on Windows.

Ensure the file structure and folder names match the references in the code.

3. Open phpMyAdmin by typing: http://localhost/phpmyadmin

In phpMyAdmin, create a new database:

Click on New in the left sidebar.

Enter the name of the database as hge_db_ and click Create.

Import the provided database file:

Click on the newly created hge_db_ database in the left sidebar.

Go to the Import tab.

Click Choose File, navigate to the program file directory, and select hge_db_.sql.

Click Go to import the database.

Update the database credentials in the PHP files as needed (e.g., host, username, password, and database_name).

4. Run the Website.
   
Open your browser and type the following: http://localhost/filename

Replace filename with the name of the folder and the main file. (e.g. http://localhost/PROGRAM/index.php)

By following these steps, you can successfully set up and run the HGE e-commerce website prototype on your local machine.
# HGE E-Commerce Website 
This project is a prototype e-commerce website developed as part of a university assignment to fulfill the requirements of a paper focused on web development and database integration. The website is designed for Home Gym Equipment (HGE), a business specializing in gym equipment sales and services, including second-hand products and wearable technologies. The aim of this prototype is to provide a responsive, user-friendly solution for HGE to expand its online presence during the COVID-19 pandemic.

# Project Overview

The HGE e-commerce website consists of seven interlinked, responsive web pages, built using HTML, CSS, PHP, and MySQL. These pages are designed to provide a seamless user experience across multiple devices, including mobile phones and computers. The website showcases HGE's products and services, offering functionalities such as cookie consent, user accounts, a database to store customer and product information, and interactive sections for communication.

# Key Features

Responsive Design: Accessible and functional across different devices and web browsers.

Home Page: Includes cookie consent, a slideshow, a dynamic navigation bar, featured equipment, a header, and a footer.

Information Page: Displays the latest products and health & fitness updates.

Wanted Page: Showcases second-hand equipment, requiring users to log in for access.

Featured Page: Highlights wearable technologies with category filters.

Gallery Page: Displays the full product catalog with RSS feed integration for visibility on Google.

Workshop Page: Offers details on fitness care and repair services, with booking functionality.

Contact Page: Includes a messaging section to facilitate customer communication.

# Additional Functionalities
Cookie Information and Consent: Displays cookie usage details and obtains user consent before enabling cookies.

Database Integration: Stores customer information, product details, and service bookings securely.

Interactive Elements: Features like slideshows, navigation bars, and category filters to enhance user engagement.

# Prototype Purpose
This project is a conceptual prototype aimed at demonstrating practical skills in web development, database management, and e-commerce design as part of the coursework. 
