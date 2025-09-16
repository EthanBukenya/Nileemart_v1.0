# Nileemart - Laravel Ecommerce Platform

[![Laravel](https://img.shields.io/badge/Laravel-8.x-red.svg)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8.0+-blue.svg)](https://www.php.net/)
[![Livewire](https://img.shields.io/badge/Livewire-2.5+-purple.svg)](https://laravel-livewire.com/)
[![Jetstream](https://img.shields.io/badge/Jetstream-2.3+-green.svg)](https://jetstream.laravel.com/)
[![License](https://img.shields.io/badge/License-MIT-brightgreen.svg)](#license)

A fully-featured single vendor ecommerce platform built with Laravel 8, designed for fresh market grocery sales in Uganda. Features modern UI/UX with Livewire components, secure payment processing with Stripe, and comprehensive order management.

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Key Modules](#key-modules)
- [API Documentation](#api-documentation)
- [Testing](#testing)
- [Deployment](#deployment)
- [Contributing](#contributing)
- [License](#license)
- [Support](#support)

## 🎯 Overview

Fresh Market is a modern, responsive ecommerce platform built specifically for grocery vendors selling fresh produce, dairy, meat, and other perishable goods. The platform combines Laravel's robust backend capabilities with Livewire's reactive frontend components to deliver a seamless shopping experience.

### 🎪 Live Demo
- **Frontend**: [Demo Store](https://nileemart.com)
- **Admin Panel**: [Admin Dashboard](https://nileemart.com/admin)
- **Test Credentials**: Available in installation guide

## ✨ Features

### 🛒 Customer Features
- **Product Catalog**: Browse fresh groceries with detailed descriptions and images
- **Advanced Search & Filtering**: Find products by category, price, freshness, organic status
- **Shopping Cart**: Persistent cart with real-time updates using Livewire
- **Secure Checkout**: Stripe integration for secure payment processing
- **User Authentication**: Registration, login, and profile management with Laravel Jetstream
- **Order Tracking**: Real-time order status updates and history
- **Wishlist**: Save favorite products for later purchase
- **Social Sharing**: Share products on social media platforms
- **Responsive Design**: Mobile-first approach for all devices

### 👨‍💼 Admin Features
- **Dashboard Analytics**: Sales reports, order statistics, and customer insights
- **Product Management**: Add, edit, and manage grocery inventory
- **Order Management**: Process orders, update status, and manage fulfillment
- **Customer Management**: View customer details and order history
- **Inventory Tracking**: Monitor stock levels and low-stock alerts
- **Payment Processing**: Manage transactions and refunds through Stripe
- **Email Notifications**: Automated order confirmations and status updates

### 🔧 Technical Features
- **Real-time Updates**: Livewire components for dynamic user interactions
- **API Ready**: Laravel Sanctum for API authentication
- **Email System**: PHPMailer integration for transactional emails
- **Shopping Cart**: Persistent cart functionality with session management
- **CORS Support**: Configured for frontend/API separation if needed
- **Proxy Support**: Production-ready with trusted proxy configuration

## 🛠️ Technology Stack

### Backend Framework
| Technology | Version | Purpose |
|------------|---------|---------|
| **Laravel Framework** | ^8.40 | Core PHP framework |
| **Laravel Jetstream** | ^2.3 | Authentication scaffolding |
| **Laravel Sanctum** | ^2.6 | API authentication |
| **Livewire** | ^2.5 | Full-stack reactive components |

### Payment & Commerce
| Package | Version | Purpose |
|---------|---------|---------|
| **Cartalyst Stripe** | ^13.0 | Stripe payment processing |
| **Shopping Cart** | ^3.0 | Cart functionality |

### Communication & Sharing  
| Package | Version | Purpose |
|---------|---------|---------|
| **PHPMailer** | ^6.6 | Email delivery system |
| **Laravel Share** | ^4.2 | Social media sharing |

### HTTP & Utilities
| Package | Version | Purpose |
|---------|---------|---------|
| **Guzzle HTTP** | ^7.0.1 | HTTP client library |
| **Laravel CORS** | ^2.0 | Cross-origin resource sharing |
| **Trusted Proxy** | ^4.4 | Proxy handling |
| **Laravel Tinker** | ^2.5 | Interactive shell |

## 📋 Prerequisites

Ensure your development environment meets these requirements:

- **PHP**: >= 8.0 with required extensions
- **Composer**: Latest version
- **Node.js**: >= 14.x
- **NPM/Yarn**: Latest version
- **Database**: MySQL 8.0+ or PostgreSQL 12+
- **Web Server**: Apache/Nginx
- **SSL Certificate**: Required for Stripe payments

### Required PHP Extensions
```
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- GD PHP Extension
- cURL PHP Extension
```

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/fresh-market-laravel.git
cd fresh-market-laravel
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies
```bash
npm install
# or
yarn install
```

### 4. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Database Setup
```bash
# Create database (MySQL example)
mysql -u root -p
CREATE DATABASE fresh_market;
exit;

# Run migrations
php artisan migrate

# Seed sample data (optional)
php artisan db:seed
```

### 6. Storage & Cache
```bash
# Create storage link
php artisan storage:link

# Clear caches
php artisan config:cache
php artisan view:cache
php artisan route:cache
```

### 7. Compile Assets
```bash
# Development
npm run dev

# Production
npm run production

# Watch mode (development)
npm run watch
```

## ⚙️ Configuration

### Environment Variables

Update your `.env` file with the following essential configurations:

#### Database Configuration
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fresh_market
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

#### Stripe Payment Configuration
```env
STRIPE_KEY=pk_test_your_publishable_key
STRIPE_SECRET=sk_test_your_secret_key
STRIPE_WEBHOOK_SECRET=whsec_your_webhook_secret
```

#### Email Configuration
```env
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@nileemart.com
MAIL_FROM_NAME="Nileemart Fresh Market"
```

#### Application Settings
```env
APP_NAME="Nileemart_v1.0 Fresh Market"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://nileemart.com
```

### Stripe Webhook Setup

1. **Create Webhook Endpoint** in Stripe Dashboard:
   ```
   Endpoint URL: https://your-domain.com/stripe/webhook
   Events: checkout.session.completed, payment_intent.succeeded
   ```

2. **Add Webhook Secret** to `.env` file

3. **Test Webhook** using Stripe CLI:
   ```bash
   stripe listen --forward-to localhost:8000/stripe/webhook
   ```

## 💻 Usage

### Starting the Development Server

```bash
# Start Laravel development server
php artisan serve

# In another terminal, start asset watching
npm run watch

# Access the application
# Frontend: http://localhost:8000
# Admin: http://localhost:8000/admin
```

### Default Admin Access

After running seeders:
```
Email: admin@freshmarket.com
Password: password
```

### Customer Registration

Customers can register through:
- Frontend registration form
- Social login (if configured)
- Guest checkout with account creation option

## 🏗️ Key Modules

### 1. Product Management
```php
// Product model with relationships
Product::with(['category', 'images', 'reviews'])
    ->where('is_active', true)
    ->where('stock_quantity', '>', 0)
    ->get();
```

### 2. Shopping Cart (Livewire Component)
```php
// Add to cart functionality
public function addToCart($productId, $quantity = 1)
{
    $product = Product::find($productId);
    
    Cart::add([
        'id' => $product->id,
        'name' => $product->name,
        'price' => $product->price,
        'quantity' => $quantity,
        'attributes' => [
            'image' => $product->image_url,
            'slug' => $product->slug
        ]
    ]);
    
    $this->emit('cartUpdated');
}
```

### 3. Order Processing
```php
// Order creation with Stripe integration
public function createOrder($paymentIntent)
{
    $order = Order::create([
        'user_id' => auth()->id(),
        'payment_intent_id' => $paymentIntent->id,
        'total' => Cart::getTotal(),
        'status' => 'processing'
    ]);
    
    // Process order items
    foreach (Cart::getContent() as $item) {
        $order->items()->create([
            'product_id' => $item->id,
            'quantity' => $item->quantity,
            'price' => $item->price
        ]);
    }
    
    return $order;
}
```

### 4. Email Notifications
```php
// Order confirmation email
Mail::to($order->user->email)->send(
    new OrderConfirmation($order)
);
```

## 📚 API Documentation

### Authentication Endpoints
```
POST   /api/login           # User login
POST   /api/register        # User registration
POST   /api/logout          # User logout
GET    /api/user            # Get authenticated user
```

### Product Endpoints
```
GET    /api/products        # Get all products
GET    /api/products/{id}   # Get single product
GET    /api/categories      # Get all categories
GET    /api/search          # Search products
```

### Order Endpoints
```
GET    /api/orders          # Get user orders
POST   /api/orders          # Create new order
GET    /api/orders/{id}     # Get single order
PUT    /api/orders/{id}     # Update order status
```

## 🧪 Testing

### Run Test Suite
```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature
php artisan test --testsuite=Unit

# Run with coverage
php artisan test --coverage
```

### Test Categories
- **Unit Tests**: Model relationships, business logic
- **Feature Tests**: HTTP endpoints, user flows
- **Browser Tests**: End-to-end user journeys (Laravel Dusk)

## 🚀 Deployment

### Production Deployment Checklist

1. **Server Requirements**
   ```bash
   # Install required software
   sudo apt update
   sudo apt install nginx mysql-server php8.0-fpm composer nodejs npm
   ```

2. **Environment Setup**
   ```bash
   # Set production environment
   APP_ENV=production
   APP_DEBUG=false
   
   # Configure database
   # Set up SSL certificates
   # Configure web server (Nginx/Apache)
   ```

3. **Optimization Commands**
   ```bash
   # Cache configuration
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   
   # Optimize autoloader
   composer install --optimize-autoloader --no-dev
   
   # Compile assets
   npm run production
   ```

4. **Queue Workers** (if using)
   ```bash
   # Set up supervisor for queue workers
   sudo apt install supervisor
   
   # Configure queue worker
   php artisan queue:work --sleep=3 --tries=3
   ```

```

## 🤝 Contributing

We welcome contributions to improve Nileemart Fresh Market! Here's how you can help:

### Development Workflow
1. **Fork the repository**
2. **Create feature branch** (`git checkout -b feature/amazing-feature`)
3. **Follow coding standards** (PSR-12 for PHP)
4. **Write tests** for new functionality
5. **Update documentation** as needed
6. **Commit changes** (`git commit -m 'Add amazing feature'`)
7. **Push to branch** (`git push origin feature/amazing-feature`)
8. **Open Pull Request**

### Contribution Areas
- 🐛 Bug fixes and improvements
- 📱 Mobile responsiveness enhancements
- 🔒 Security improvements
- 🚀 Performance optimizations
- 📚 Documentation updates
- 🎨 UI/UX improvements
- 🧪 Test coverage expansion

### Code Standards
- Follow PSR-12 coding standards
- Write meaningful commit messages
- Include tests for new features
- Update documentation for changes
- Use meaningful variable names
- Comment complex logic

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

```
MIT License

Copyright (c) 2025 Nileemart

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
```

## 🆘 Support

### Getting Help

- **Issues**: [GitHub Issues](https://github.com/EthanBukenya/Nileemart_v1.0/issues)
- **Discussions**: [GitHub Discussions](https://github.com/EthanBukenya/Nileemart_v1.0/discussions)
- **Email**: support@nileemart.com

### Frequently Asked Questions

**Q: How do I set up Stripe in test mode?**
A: Use test API keys from Stripe dashboard and test card numbers provided by Stripe.

**Q: Can I customize the design?**
A: Yes! The platform uses Laravel Blade templates with Tailwind CSS for easy customization.

**Q: Is multi-vendor support available?**
A: Currently single vendor. Multi-vendor support is planned for future releases.

**Q: How do I add new payment methods?**
A: The platform is built with extensible payment architecture. Contact support for integration guidance.

---

## 👨‍💻 Author

**[Ethan Bukenya]**
- Laravel Developer & Ecommerce Specialist
- GitHub: [@EthanBukenya](https://github.com/EthanBukenya)
- Email: ethancylb@gmail.com
- LinkedIn: [Your LinkedIn](https://linkedin.com/in/yourprofile)

---

### 🚀 What's Next?

**Upcoming Features:**
- 📱 Mobile app (React Native/Flutter)
- 🤖 AI-powered product recommendations  
- 📊 Advanced analytics dashboard
- 🚚 Delivery tracking integration
- 💬 Live chat support
- 🔔 Push notifications
- 📱 PWA (Progressive Web App) support

**Join our community** and help shape the future of Fresh Market! ⭐

---

**Made with ❤️ for fresh food lovers everywhere**
