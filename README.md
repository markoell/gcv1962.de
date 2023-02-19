# gcv1962.de
Website Projekt für den Gundelsheimer Carneval Verein 1962 e.V. als überarbeitete Version

## Quality
| Stage | Link | Status |
| --- | --- | --- |
| PROD | https://gcv1962.de/ | [![Deploy To Production](https://github.com/markoell/gcv1962.de/actions/workflows/deployment.yml/badge.svg?branch=main)][State] |
| TEST | http://gcv.mk-swe.de/ | [![Deploy to test server](https://github.com/markoell/gcv1962.de/actions/workflows/deployment.yml/badge.svg?branch=develop)][State] |
| Code Quality | [Codefactor](https://www.codefactor.io/repository/github/markoell/gcv1962.de) | [![CodeFactor](https://www.codefactor.io/repository/github/markoell/gcv1962.de/badge)](https://www.codefactor.io/repository/github/markoell/gcv1962.de)

# Contributing
Befolge folgende Schritte, um das Projekt aufzusetzen:
## 1. Klone das Repository
```bash
git clone git@github.com:markoell/gcv1962.de.git --recurse-submodules
```
## 2. Klone alle Untermodule/Submodules (Falls clone ohne `--recurse-submodules` geschehen ist)

> Für den Zugriff auf gcv1962-content werden spezielle Berechtigungen benötigt!
  Hierzu eine kurze Nachricht an den Repository-Owner senden.

```bash
git submodule init
git submodule update
```
## 3. Installation der PHP-Plugins via [Composer][Composer]
```bash
sudo apt-get update
sudo apt-get install composer
composer install
```
- Troubleshooting

Sollten bei der Installation folgender Fehler auftreten:
```composer
composer install
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Your lock file does not contain a compatible set of packages. Please run composer update.

  Problem 1
    - claviska/simpleimage is locked to version 3.6.3 and an update of this package was not requested.
    - claviska/simpleimage 3.6.3 requires ext-gd * -> it is missing from your system. Install or enable PHP's gd extension.
  Problem 2
    - league/color-extractor is locked to version 0.3.2 and an update of this package was not requested.
    - league/color-extractor 0.3.2 requires ext-gd * -> it is missing from your system. Install or enable PHP's gd extension.
  Problem 3
    - claviska/simpleimage 3.6.3 requires ext-gd * -> it is missing from your system. Install or enable PHP's gd extension.
    - getkirby/cms 3.5.7.1 requires claviska/simpleimage 3.6.3 -> satisfiable by claviska/simpleimage[3.6.3].
    - getkirby/cms is locked to version 3.5.7.1 and an update of this package was not requested.

To enable extensions, verify that they are enabled in your .ini files:
    - /etc/php/7.4/cli/php.ini
    - /etc/php/7.4/cli/conf.d/10-opcache.ini

```
Dann müssen ggf. Packete für PHP nachinstalliert werden:
```bash
sudo apt-get install php7.4-gd
```

Weitere Module zum Nachinstallieren:

```bash
sudo apt-get install php-mbstring
```

## 4. Installation NPM
> [NPM][Nodejs] ist ein PackageManager für JavaScript/[Node.js][Nodejs]. Damit werden alle Frontend-Bibliotheken installiert.

```bash
# Install Node.js on Ubuntu via package manager
curl -fsSL https://deb.nodesource.com/setup_14.x | sudo -E bash -
sudo apt-get update
sudo apt-get install -y nodejs

# run npm install
npm install
```

## 5. Installiere [Docker/Docker-Compose][Docker]
> [Docker][Docker] ermöglicht eine einfache Ausführung von Progammen auf verschiedensten Plattformen/Betriebssystemen ohne die Probleme diverser Abhängigkeiten
```bash
# Install docker on Ubuntu
sudo apt-get update
sudo apt  install docker.io
sudo apt  install docker-compose
# Install docker-compose on Ubuntu
```
## 6. Füge www-data zur aktuellen Benutzergruppe hinzu
```bash
sudo usermod -aG daniel www-data
sudo usermod -aG www-data daniel
sudo chmod g+rw .
```

## 7. Starte die Webanwendung:
```bash
cd deployment/docker-local/
docker-compose up -d
```
## 8. Geh auf Website http://localhost
## XDebug

XDebug kann lokal installiert werden:
https://getkirby.com/docs/cookbook/setup/php-debugging-with-xdebug

Das vorhandene Docker-Compose File `deployment/docker-local/docker-compose.yml` installiert ebenfalls XDebug

### Lauch-Configuration für VSCode:

```json
"configurations": [
        {
            "name": "Listen for Xdebug remote",
            "type": "php",
            "request": "launch",
            "port": 9000,
            "pathMappings": {
                "/var/www/html/": "${workspaceFolder}"
            }
        }
    ]
```

### Lauch-Configuration für VSCode Remote mit WSL:

```json
"configurations": [
        {
            "name": "Listen for Xdebug remote",
            "type": "php",
            "request": "launch",
            "port": 9000,
            "hostname": "localhost",
            "pathMappings": {
                "/var/www/html/": "${workspaceFolder}"
            }
        }
    ]
```

### Test XDebug

Leg eine Datei info.php im zentralen Verzeichnis an

```php
<?php
    xdebug_info();
    exit();
?>
```

Aufruf: http://localhost/info.php


[State]: https://github.com/markoell/gcv1962.de/actions/workflows/deployment.yml
[Composer]: https://getcomposer.org/
[Nodejs]: https://nodejs.org/
[Docker]: https://www.docker.com/