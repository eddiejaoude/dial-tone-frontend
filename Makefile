composer.install:
	curl -s http://getcomposer.org/installer | php
	php composer.phar install --dev --no-interaction

scrutinizer.coverage.send
	wget https://scrutinizer-ci.com/ocular.phar
	php ocular.phar code-coverage:upload --format=php-clover test/build/coverage.xml

