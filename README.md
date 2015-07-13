java -jar bin/selenium-server-standalone-2.46.0.jar

PHPUnit
```
cd phpunit-tests
vi Oshietegoo/SearchTest.php
phpunit --bootstrap bootstrap.php Oshietegoo/SearchTest.php
```

Codeception
```
cd ../
vi tests/acceptance/WelcomeCept.php
codecept run acceptance --steps
```

Behat
```
vi features/search.feature
./bin/behat features/search.feature 
```
