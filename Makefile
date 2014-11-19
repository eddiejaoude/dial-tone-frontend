# parameters
GIT_TAG=build-$(TRAVIS_BRANCH)-$(TRAVIS_BUILD_NUMBER)

composer.install:
	curl -s http://getcomposer.org/installer | php
	php composer.phar install --dev --no-interaction

test.run:
	bin/robo parallel:run

scrutinizer.coverage:
	wget https://scrutinizer-ci.com/ocular.phar
	php ocular.phar code-coverage:upload --format=php-clover test/build/coverage.xml

travis: build.user build.version build.tag

build.user:
	git config --global user.email "builds@travis-ci.com"
	git config --global user.name "Travis CI"

build.version:
	replace '--unknown--' $(GIT_TAG) -- version.ini 
	git commit -m "Set build VERSION number" version.ini

build.tag:
	git tag $(GIT_TAG) -a -m "Generated tag from TravisCI build $(TRAVIS_BUILD_NUMBER)"
	git push --quiet https://$(GITHUBKEY)@github.com/TransformCore/dial-tone-frontend $(GIT_TAG) > /dev/null 2>&1

