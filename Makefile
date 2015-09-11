include config.mk

SOURCES= \
	src/bind.php src/chain.php src/chunk.php src/compose.php src/concat.php \
	src/filter.php src/indexBy.php src/map.php src/mapcat.php src/max.php \
	src/min.php src/product.php src/reduce.php src/skip.php src/skipN.php \
	src/sum.php src/take.php src/takeN.php

.PHONY: clean check phar

load.php: $(SOURCES)
	$(PHP) make-loader.php $^ > $@

phar: morrisonlevi_algorithm.phar

morrisonlevi_algorithm.phar: load.php $(SOURCES)
	$(PHP) -d phar.readonly=0 make-phar.php $@ $^

clean:
	rm -f morrisonlevi_algorithm.phar load.php

check: load.php
	$(PHP) $(PHPUNIT) -c phpunit.xml
