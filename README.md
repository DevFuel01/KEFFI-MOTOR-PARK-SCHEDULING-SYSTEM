# 🚌 Keffi Motor Park Scheduling System

The **Keffi Motor Park Scheduling System** is a modern transport management platform designed to digitize ticketing, trip scheduling, and park operations within Keffi and surrounding areas. It improves efficiency, reduces fraud, and makes travel easier for passengers and administrators.

## 🚀 Features

- 🗓️ **Trip Scheduling & Vehicle Assignment**  
  Transport companies can manage daily trips, vehicles, and seat allocations seamlessly.

- 🎫 **Digital Tickets with QR Codes**  
  Passengers receive printable e-tickets that include QR codes for easy verification at boarding.

- 💳 **Online Payments (Paystack Integration)**  
  Enables secure, cashless payments using debit cards or bank transfer via Paystack.

- 📧 **Automated Confirmation**  
  Email and SMS notifications are sent upon successful bookings.

- 📊 **Admin Dashboard**  
  View bookings, payments, schedules, and generate reports from a centralized interface.

- 🔒 **Fraud Prevention**  
  Includes OTP validation, reCAPTCHA, and rate limiting to prevent abuse.

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, Bootstrap, JavaScript  
- **Backend:** PHP (Procedural or OOP)  
- **Database:** MySQL  
- **Integrations:** Paystack API, QR code generator, OTP/email/SMS APIs

## 📦 Installation Guide

1. Clone the project:
   bash
   git clone https://github.com/your-username/keffi-motorpark.git

2. Move it into your XAMPP `htdocs` folder:

   C:\xampp\htdocs\keffi-motorpark

3. Import the SQL database:
   * Open phpMyAdmin
   * Create a new DB: `keffi_transport`
   * Import `keffi_transport.sql` from the project files

4. Start **Apache** and **MySQL** in XAMPP

5. Visit the app in your browser:

   http://localhost/keffi-motorpark

## 📂 Folder Structure

## 🔐 User Roles

* **Admin:** Full access to trips, vehicles, payments, reports
* **Agent:** Schedule trips, print tickets, manage passengers
* **Customer:** Book trips, pay online, receive tickets

## 📌 Status

✅ MVP Complete
🔧 Features like live tracking, route optimization, and mobile app integration are in progress.

## 🤝 Contributing

Pull requests are welcome. For major features or bugs, open an issue first to discuss the approach.

## 👨‍💻 Developer

**Idris Ibrahim** — Software Developer & CEO, Hamzury Innovation Hub
