# 🤖 AI Lost & Found System

An **AI-powered campus Lost & Found management system** that helps students recover lost items using **Natural Language Processing (NLP) similarity matching**.

This system allows users to report lost or found items and automatically detects possible matches using **TF-IDF vectorization and cosine similarity**.

---

## 🚀 Features

* 🔎 **Report Lost Items**
* 📦 **Report Found Items**
* 🧠 **AI NLP Similarity Matching**
* 📊 **Admin Dashboard with Analytics**
* 👤 **Student Dashboard**
* 🖼 **Image Upload Support**
* 📈 **Match Similarity Percentage**
* 🔐 **Role-based Login System**

---

## 🧠 How AI Matching Works

The system uses **Natural Language Processing (NLP)** to compare lost and found item descriptions.

Steps:

1. Text descriptions are converted into vectors using **TF-IDF Vectorizer**
2. Similarity is calculated using **Cosine Similarity**
3. If similarity exceeds a threshold, the system flags a **potential match**

Example:

Lost Item Description
Black leather wallet with metro card

Found Item Description
Black wallet found near library

AI Similarity Result
82% Match

---

## 🛠 Tech Stack

### Frontend

* HTML
* CSS
* JavaScript

### Backend

* PHP
* MySQL

### AI / NLP

* Python
* Scikit-learn
* TF-IDF Vectorization
* Cosine Similarity

### Tools

* XAMPP
* Git & GitHub
* VS Code

---

## 📂 Project Structure

lostfound-project
│
├── index.html
├── lost.html
├── found.html
├── matches.html
├── login.html
├── style.css
├── app.js
│
├── db.php
├── login.php
├── report_lost.php
├── report_found.php
├── get_matches.php
├── chatbot.php
│
├── student_dashboard.php
│
├── admin
│   └── dashboard.php
│
├── nlp.py
│
└── uploads

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the repository

git clone https://github.com/ahtishamali17/ai-lost-found-system.git

### 2️⃣ Move project to XAMPP

Place the folder inside:

C:\xampp\htdocs

### 3️⃣ Start XAMPP

Start:

Apache
MySQL

### 4️⃣ Create Database

Open:

http://localhost/phpmyadmin

Create database:

lostfound

Import tables from SQL script.

### 5️⃣ Install Python Dependency

pip install scikit-learn

### 6️⃣ Run the Project

Open in browser:

http://localhost/lostfound-project

---

## 🔐 Login Credentials

### Admin

Email
[admin@niet.com](mailto:admin@niet.com)

Password
admin123

### Student

Email
[student@niet.com](mailto:student@niet.com)

Password
student123

---

## 📸 Screenshots

Add screenshots here:

Home Page
Lost Item Form
Found Item Form
Admin Dashboard
AI Match Results

Example:

screenshots/home.png
screenshots/dashboard.png

---

## 🚀 Future Improvements

* 📷 AI Image Similarity Detection
* 📍 Campus Map Integration
* 🔔 Real-time Notifications
* 📱 Mobile Responsive UI
* 📦 QR Code Item Claim System
* 🤖 AI Chatbot Assistant

---

## 👨‍💻 Author

**Ahtisham Ali**

B.Tech CSE (AI) Student
Noida Institute of Engineering and Technology

GitHub
https://github.com/ahtishamali17

---

⭐ If you like this project, consider giving it a **star on GitHub!**
