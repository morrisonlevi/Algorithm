include config.mk

SOURCES= \
	src/bind.php src/chain.php src/chunk.php src/compose.php src/concat.php \
	src/filter.php src/indexBy.php src/map.php src/mapcat.php src/max.php \
	src/min.php src/product.php src/reduce.php src/skip.php src/skipWhile.php \
	src/sum.php src/take.php src/takeWhile.php

morrisonlevi_algorithm.phar: $(SOURCES)
	$(PHP) -d phar.readonly=0 make-phar.php $@ $^

.PHONY: clean check

clean:
	rm -f morrisonlevi_algorithm.phar

check:
	$(PHP) $(PHPUNIT) -c phpunit.xml

