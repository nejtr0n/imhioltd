FROM php:7.2.3-fpm
ENV PHALCON_VERSION=3.3.2

RUN apt-get update && apt-get upgrade -y && apt-get install -y libcurl4-gnutls-dev curl \
libmcrypt-dev zip unzip postgresql-server-dev-all libfreetype6-dev \
libjpeg62-turbo-dev libpng-dev libpcre3-dev libssl-dev

RUN curl -sSL "https://codeload.github.com/phalcon/cphalcon/tar.gz/v${PHALCON_VERSION}" | tar -xz \
    && cd cphalcon-${PHALCON_VERSION}/build \
    && ./install \
    && cp ../tests/_ci/phalcon.ini $(php-config --configure-options | grep -o "with-config-file-scan-dir=\([^ ]*\)" | awk -F'=' '{print $2}') \
    && cd ../../ \
    && rm -r cphalcon-${PHALCON_VERSION}

RUN docker-php-ext-install iconv
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install mbstring pdo_mysql tokenizer pdo_pgsql gd exif opcache bcmath

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --install-dir=/usr/local/bin \
        --filename=composer

RUN usermod  -u 1000 www-data
RUN groupmod -g 1000 www-data
