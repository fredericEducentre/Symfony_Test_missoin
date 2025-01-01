# Symfony_Test_missoin

Required : Composer installed, sqlite3, php

Install dependencies
```
composer install
```

Create database
```
symfony console doctrine:database:create
```

Make the migration
```
symfony console doctrine:migrations:migrate
```