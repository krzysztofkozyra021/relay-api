FROM registry.blumilk.pl/internal-public/secops-tools-bin:v1.2.0@sha256:be2755b1afeeae009abdeeb61b7214776776df5b50c818c1546072563139d12c AS secops-tools-bin
FROM composer:2.9.5 AS composer
FROM ghcr.io/php/pie:1.3.8-bin AS pie-bin

FROM php:8.5.3-fpm-trixie AS base

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY --from=pie-bin /pie /usr/bin/pie

# For other versions check: https://nginx.org/packages/mainline/debian/pool/nginx/n/nginx/
# renovate: datasource=github-tags depName=nginx/nginx extractVersion=^release-(?<version>.*)$
ARG NGINX_VERSION="1.29.5"

# renovate: datasource=github-tags depName=phpredis/phpredis
ARG PHPREDIS_VERSION=6.3.0

RUN apt-get update \
    && apt-get install --assume-yes gpg \
    && curl https://nginx.org/keys/nginx_signing.key | gpg --dearmour --output /etc/apt/trusted.gpg.d/apt.nginx.org.gpg > /dev/null \
    && echo "deb https://nginx.org/packages/mainline/debian trixie nginx" | tee /etc/apt/sources.list.d/nginx.list \
    && apt-get update && apt-get install --assume-yes \
        nginx=${NGINX_VERSION}-1~trixie \
        zip \
        libzip-dev \
        supervisor \
        libpq-dev \
    && docker-php-ext-install \
            pdo_pgsql \
     && pie install phpredis/phpredis:${PHPREDIS_VERSION}

COPY ./environment/.docker/app/entrypoint.sh /entrypoint.sh
COPY ./environment/.docker/app/nginx.conf /etc/nginx/nginx.conf

WORKDIR /application

ENTRYPOINT ["/entrypoint.sh"]

FROM base AS local

# renovate: datasource=github-tags depName=xdebug/xdebug
ARG XDEBUG_VERSION=3.5.1
ARG INSTALL_XDEBUG=true

RUN if [ ${INSTALL_XDEBUG} = true ]; then \
    pie install xdebug/xdebug:${XDEBUG_VERSION} \
;fi

COPY --from=secops-tools-bin /usr/local/bin/age /usr/local/bin/age-keygen /usr/local/bin/sops /usr/local/bin/

RUN mv "${PHP_INI_DIR}/php.ini-development" "${PHP_INI_DIR}/php.ini"

ARG USER_NAME=host-user
ARG USER_ID=1000
ARG PHP_FPM_GROUP=www-data

RUN adduser \
        --disabled-password \
        --uid ${USER_ID} \
        ${USER_NAME} \
    && usermod \
        --append \
        --groups \
        ${PHP_FPM_GROUP} \
        ${USER_NAME}

FROM composer AS vendor-build

WORKDIR /app_composer_dependencies

COPY composer.json composer.lock ./

RUN composer install \
        --no-interaction \
        --no-plugins \
        --no-scripts \
        --no-dev \
        --prefer-dist \
        --ignore-platform-reqs


FROM base AS production

ARG ENVIRONMENT_ARG
ENV ENVIRONMENT=${ENVIRONMENT_ARG}

RUN mv "${PHP_INI_DIR}/php.ini-production" "${PHP_INI_DIR}/php.ini"

COPY ./environment/${ENVIRONMENT}/app/php.ini ${PHP_INI_DIR}/conf.d/zzz-overrides-php.ini
COPY ./environment/${ENVIRONMENT}/app/php-fpm.conf /usr/local/etc/php-fpm.d/zzz-overrides.conf
COPY ./environment/${ENVIRONMENT}/app/supervisord.conf /etc/supervisor/custom-supervisord.conf


# Copy Composer dependencies
COPY --chown=www-data:www-data --from=vendor-build /app_composer_dependencies/vendor ./vendor/

# Copy App files
COPY --chown=www-data:www-data . .

# Remove unnecessary files
RUN rm --recursive --force \
    .dockerignore \
    environment/.docker \
    environment/dev

RUN composer dump-autoload --optimize

EXPOSE 80

ARG PROJECT_BUILD_VERSION_ARG
ENV PROJECT_BUILD_VERSION=${PROJECT_BUILD_VERSION_ARG}
