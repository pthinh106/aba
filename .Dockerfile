# Sử dụng hình ảnh PHP 8.0.30 chính thức với FPM
FROM php:8.0.30-fpm

# Cài đặt các phụ thuộc hệ thống
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev

# Xóa bộ nhớ cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Cài đặt các phần mở rộng PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Thiết lập thư mục làm việc
WORKDIR /var/www

# Sao chép nội dung thư mục hiện tại vào thư mục làm việc
COPY . /var/www

# Sao chép quyền sở hữu thư mục hiện tại cho người dùng www-data
COPY --chown=www-data:www-data . /var/www

# Chuyển người dùng hiện tại thành www-data
USER www-data

# Mở cổng 9000 và khởi động máy chủ php-fpm
EXPOSE 9000
CMD ["php-fpm"]