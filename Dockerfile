# Use the official PHP and Apache image
#FROM php:7.4-apache
FROM php:8.2-apache

# Install required dependencies
#RUN apt-get update && apt-get install -y \
#    libxml2-dev \
#    libpng-dev \
#    libjpeg-dev \
#    libmcrypt-dev \
#    libzip-dev \
#    unzip \
#    && docker-php-ext-install pdo_mysql mysqli mbstring soap gd zip

# Install any additional dependencies if needed
# For example, if you need to install the mysqli extension:
RUN docker-php-ext-install mysqli

# Install other extensions
# For example, if you need to install the pdo_mysql extension:
RUN docker-php-ext-install pdo_mysql

# You can also install extensions using pecl
# For example, if you need to install the xdebug extension:
# RUN pecl install xdebug \
#     && docker-php-ext-enable xdebug

# Set up OJS source code
WORKDIR /var/www/html
COPY . /var/www/html

# Create files folder and change permissions
RUN mkdir files
RUN chown -R www-data:www-data /var/www/html/files
RUN chmod -R 755 /var/www/html/files

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

#COPY ./cfg/000-default.conf /etc/apache2/sites-available/000-default.conf

# Enable Apache modules
RUN a2enmod rewrite

# Expose the necessary ports
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
