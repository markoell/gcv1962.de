FROM php:7.3-cli-alpine

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY --from=node:lts-alpine /usr/local/bin/npm /usr/local/bin/npm
COPY --from=node:lts-alpine /usr/local/bin/node /usr/local/bin/node

WORKDIR /Page

COPY scripts/deploy/entrypoint.sh .
COPY scripts/Linux/copy_npm_assets.sh .

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions gd \
    && chmod u+x ./entrypoint.sh ./copy_npm_assets.sh

COPY composer.* ./
COPY package* ./

ENTRYPOINT /Page/entrypoint.sh
