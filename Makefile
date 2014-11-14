# See LICENSE file for copyright and license details.

define LICENSE
<?php

/**
 * String Calculator Kata in php.
 * Based on instructions at http://osherove.com/tdd-kata-1/
 *
 * @author    Mike Griffith <bikegriffith@gmail.com>
 * @license   http://creativecommons.org/licenses/MIT/ MIT
 */
endef
export LICENSE

COMPOSER = $(shell which composer)
ifeq ($(strip $(COMPOSER)),)
	COMPOSER = php composer.phar
endif

all: test

test-install:
	# Composer: http://getcomposer.org/download/
	$(COMPOSER) install

# if these fail, you may need to install the helper library - run "make
# test-install"
test:
	@PATH=vendor/bin:$(PATH) phpunit --strict --colors --configuration tests/phpunit.xml;
