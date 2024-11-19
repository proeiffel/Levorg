# Levorg

Levorg/
├── public/
│   ├── index.php       # Ana giriş noktası
│   ├── login.php       # Kullanıcı giriş sayfası
│   ├── register.php    # Kullanıcı kayıt sayfası
│   ├── profile.php     # Kullanıcı profil sayfası
├── src/
│   ├── Database.php    # Veritabanı bağlantı sınıfı
│   ├── User.php        # Kullanıcı işlemleri (CRUD)
├── config/
│   └── config.php      # Genel yapılandırma ve ayarlar
├── sql/
│   └── schema.sql      # Veritabanı yapısını oluşturacak SQL komutları
├── .env                # Veritabanı bilgileri için çevre değişkenleri
└── README.md           # Proje açıklamaları


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    profile_pic VARCHAR(255),
    bio TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
