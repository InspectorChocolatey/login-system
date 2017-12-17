#!/bin/bash
# https://stackoverflow.com/questions/35560150/php-gd-bundled-extension-without-recompiling-php-solution


apt-get install php5-dev -y;
wget "http://cz2.php.net/get/php-5.6.18.tar.gz/from/this/mirror" -O "php-5.6.18.tar.gz";
tar -xzf "php-5.6.18.tar.gz";
cd "php-5.6.18/ext/gd/";
phpize


--with-freetype-dir=shared,/usr --with-vpx-dir=shared,/usr --with-jpeg-dir=shared,/usr --with-xpm-dir=shared,/usr/X11R6


php-config --configure-options


--with-php-config=/usr/bin/php-config --with-gd 

./configure --with-php-config=/usr/bin/php-config --with-gd --with-freetype-dir=YOUR_VALUE --with-vpx-dir=YOUR_VALUE --with-jpeg-dir=YOUR_VALUE --with-xpm-dir=YOUR_VALUE

make





# alternative:

http://rpmfind.net/linux/rpm2html/search.php?query=php-gd-bundled&submit=Search+...
