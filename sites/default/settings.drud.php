<?php

$conf['cache_backends'][] = 'sites/all/modules/varnish/varnish.cache.inc';
$conf['cache_class_cache_page'] = 'VarnishCache';
$conf['cache'] = 1;
$conf['cache_lifetime'] = 60;
$conf['page_cache_maximum_age'] = 0;
