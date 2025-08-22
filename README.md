**Instagram Phishing Page - For Educational Purposes Only**

This repository contains the source code for a simple Instagram phishing page. This project is intended for educational and ethical purposes only. The author is not responsible for any misuse of this toolkit.

**Disclaimer**
This tool is for educational purposes only. Any actions and or activities related to the material contained within this repository are solely your responsibility. The misuse of this information can result in criminal charges brought against the persons in question. The author will not be held responsible in the event any criminal charges be brought against any individuals misusing the information in this repository to break the law.

**Features**
A visually accurate clone of the Instagram login page.
Frontend input validation to mimic the real login page.
Backend PHP script to capture and store entered credentials.

**Prerequisites**
To run this project and have the phishing functionality working, you will need a web server with PHP support. One of the most common ways to set this up locally is by using a software stack like XAMPP.

**XAMPP**: A free and open-source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and Perl programming languages.

**Installation and Setup**
Follow these steps to get the project up and running on your local machine.
**Step 1**: Download the Project
Navigate to the GitHub repository: https://github.com/COxRIPMIZO/Instagram-Fishing
Click on the "Code" button and then click on "Download ZIP".
Extract the downloaded ZIP file to a folder on your computer.

**Step 2**: Set Up a Web Server (using XAMPP)
Download and Install XAMPP: Go to the Apache Friends website and download the appropriate version of XAMPP for your operating system (Windows, macOS, or Linux).
Run the Installer: Follow the on-screen instructions to install XAMPP. You can accept the default settings.

**Start XAMPP**: Open the XAMPP Control Panel.
**Start Apache**: Click the "Start" button next to the "Apache" module. This will start your local web server.

**Step 3**: Move Project Files to the Server Directory
Open the folder where you extracted the project files.
Navigate to your XAMPP installation directory.
On Windows, the default location is C:\xampp.
On macOS, you can find it in the /Applications/XAMPP folder.
Inside the XAMPP directory, find the htdocs folder. This is the root directory for your web server.
Copy the entire "Instagram-Fishing" project folder into the htdocs directory.

**Step 4**: Access the Phishing Page
Open your web browser.
In the address bar, type: http://localhost/Instagram-Fishing/ (assuming you named the project folder "Instagram-Fishing").
You should now see the fake Instagram login page.

**Step 5**: Retrieving Captured Credentials
When a user enters their credentials on the fake login page and clicks "Log In," the information is sent to the login.php script. This script then saves the credentials to a file named log.txt within the same directory on the server.
To view the captured credentials:
Navigate to the project folder inside your htdocs directory (C:\xampp\htdocs\Instagram-Fishing on Windows).
You will find a file named log.txt.
Open log.txt with a text editor to see the usernames and passwords that have been entered.
