FROM php:7.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip

# Enable Apache mod_rewrite (Insecure default configuration)
RUN a2enmod rewrite

# Copy application code
COPY . /var/www/html

# Expose port
EXPOSE 80

# Insecure permissions
RUN chmod 777 /var/www/html  # Insecure file permissions
