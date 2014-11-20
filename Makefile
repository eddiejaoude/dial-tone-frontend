# parameters
GIT_TAG=build-$(TRAVIS_BRANCH)-$(TRAVIS_BUILD_NUMBER)

check:
	php app/check.php

composer.install:
	if [ ! -f "composer.phar" ] ; then curl -s http://getcomposer.org/installer | php ; fi
	php composer.phar install --dev --no-interaction

test.run:
	bin/robo parallel:run

scrutinizer.coverage:
	wget https://scrutinizer-ci.com/ocular.phar
	php ocular.phar code-coverage:upload --format=php-clover test/build/coverage.xml

build.package: build.user build.version build.changelog build.tag

build.user:
	git config --global user.email "builds@travis-ci.com"
	git config --global user.name "Travis CI"

build.version:
	replace '{{ version_self }}' $(GIT_TAG) -- version.ini 
	git commit -m "Set build VERSION number $(GIT_TAG)" version.ini

build.changelog:
	git log --decorate --all --oneline --graph > changelog
	git commit -m "Created changelog" changelog

build.tag:
	git tag $(GIT_TAG) -a -m "Generated tag from TravisCI build $(TRAVIS_BUILD_NUMBER)"
	@git push --quiet https://$(GITHUBKEY)@github.com/TransformCore/dial-tone-frontend $(GIT_TAG) > /dev/null 2>&1

dev.run: check dev.branch composer.install dev.server

dev.branch:
	git checkout ${branch}

dev.server:
	php app/console server:run

logs:
	cat app/logs/*.log

