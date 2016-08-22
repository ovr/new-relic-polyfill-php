<?php

if (!extension_loaded('newrelic')) {
    function newrelic_set_appname($name);

    function newrelic_add_custom_parameter($key, $value) {}

    function newrelic_add_custom_tracer($functionName) {}

    function newrelic_background_job ($flag) {}

    function newrelic_capture_params ($enable) {}

    function newrelic_custom_metric($key, $value) {}

    function newrelic_disable_autorum() {}

    function newrelic_end_of_transaction() {}

    function newrelic_get_browser_timing_footer($includeTags) {}

    function newrelic_get_browser_timing_header($includeTags) {}

    function newrelic_ignore_apdex($includeTags) {}

    function newrelic_ignore_transaction($includeTags) {}

    function newrelic_name_transaction($name) {}

    function newrelic_notice_error($message) {}

    function newrelic_record_custom_event($name, $attributes) {}

    function newrelic_set_appname($name) {}

    function newrelic_set_user_attributes($name, $account, $product) {}

    function newrelic_start_transaction($name, $license = null) {}
}

