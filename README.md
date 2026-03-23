# Supay Recharge Portal 📱💳
A premium, production-ready Laravel 13 Recharge Portal integrated with **Supay.in API** and **Razorpay Payment Gateway**.

### 🌟 Key Features
- **Premium UI/UX**: Modern Dashboard with glassmorphism, gradients, and real-time validations.
- **Secure Authentication**: Username-based login with hashed password security.
- **Recharge Integration**: Direct connection with Supay.in's Recharge API.
- **Razorpay Integration**: "Add Money" flow with secure Order ID generation and Signature Verification.
- **Robust Validation**: Real-time 10-digit mobile validation and numeric-only input constraints.
- **Error Handling**: Comprehensive Try-Catch logic for API resilience and detailed server logging.

---

### ⚙️ Quick Installation & Setup

Follow these steps exactly to get the project running on your local machine (XAMPP/WAMP):

#### 1. Configure Environment
Rename `.env.example` to `.env` and update your database & API credentials:
```env
DB_DATABASE=supay_db
DB_USERNAME=root
DB_PASSWORD=

SUPAY_MEMBER_ID=your_id
SUPAY_API_PASSWORD=your_password
SUPAY_API_PIN=your_pin

RAZORPAY_KEY=your_key
RAZORPAY_SECRET=your_secret
```

#### 2. Install Dependencies
Run this in your project terminal:
```bash
composer install
npm install
```

#### 3. Setup Database (Tables & Admin User)
Run this command to create all tables and automatically create the **Admin User** defined in `DatabaseSeeder.php`:
```bash
php artisan migrate:fresh --seed
```

#### 4. Start Server
```bash
php artisan serve
```
Access the portal at `http://127.0.0.1:8000`

---

### 🔑 Login Credentials (After Seeding)
- **Username**: `admin`
- **Password**: `admin`
- **Address**: `Kolhapur, Maharashtra`

---

### 🚀 How to Use?
1. **Login**: Use the `admin` credentials provided above.
2. **Dashboard**: Select your mobile operator (Airtel, Jio, etc.).
3. **Validate**: Enter a 10-digit mobile number. The system will alert you if the number is incorrect in real-time.
4. **Recharge**: Enter the amount and click **"Proceed To Recharge"**.
5. **Add Money**: Need wallet balance? Enter an amount and click **"Add Money"** to launch the Secure Razorpay Gateway.
6. **Track**: All transaction results will appear in a premium Status Modal.

---

### 🛠️ Technical Stack
- **Backend**: Laravel 13.x (PHP 8.2+)
- **Frontend**: Tailwind CSS, SweetAlert2, Blade Templates
- **Payments**: Razorpay SDK
- **API**: HTTP Client with cURL SSL Bypassing (for local development)
