NewRelic Polyfill
=================

Why this package is needed?

#### 1. Protect unneeded check that NewRelic's PHP extension is loaded: 

if (extension_loaded('newrelic')) {
    newrelic_set_appname($name);
}


#### 2. Get cool auto complete


# MIT

