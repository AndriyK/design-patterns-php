## Examples of OOP design pattern implemented on PHP

Package contains design patterns examples from book "Head First Design Patterns" by Eric Freeman and Elisabeth Freeman, implemented on PHP.

Every pattern's related code lives in correspondent folder, like "Strategy", "Observer" and so on. 
In "examples" folder are located "root" pattern's file with correspondent name, like "Strategy.php", there are code that demostrates pattern's work.

At the moment following patterns were implemented:
 1. Strategy
 2. Observer
 3. Decorator
 4. Factory
 5. Singleton
 6. Command
 7. Adapter
 8. Facade
 9. Template Method
 10. Iterator

So, after installation of package (with composer install) to web server document root, just hit needed pattern file,
something like that:

http://localhost/DesignPatterns/examples/Strategy.php

Aim os this package is to show how patterns from the book may be implemented on PHP, and help developers to better understand the idea of the pattern.

Tests are located in "tests" folder, for running them execute command "vendor/bin/phpunit" from package root folder.
