include config.mk

.PHONY: clean check phar all

all: load.php morrisonlevi_algorithm.phar

SOURCES = $(wildcard src/*.php)

load.php: $(SOURCES)
	$(PHP) make-loader.php $^ > $@

phar: morrisonlevi_algorithm.phar

morrisonlevi_algorithm.phar: load.php $(SOURCES)
	$(PHP) -d phar.readonly=0 make-phar.php $@ $?

clean:
	$(RM) morrisonlevi_algorithm.phar
	$(RM) load.php

check: load.php
	$(PHP) $(PHPUNIT) -c phpunit.xml

