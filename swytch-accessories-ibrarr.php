<?php

/**
 * Plugin Name: Swytch Accessories - Ibrarr
 * Description: Creates a custom post type and template to list the top 50 accessories
 * Version: 1.0.0
 * Author: Ibrarr Khan
 * Author URI: https://www.swytchbike.com/
 * License: GPLv2 or later
 * Text Domain: swytch-accessories
 */

require_once __DIR__ . '/vendor/autoload.php';

use Accessories\CustomPostType;
use Accessories\EnqueueScripts;
use Accessories\RetrieveData;
use Accessories\Templates;

$customPostType = new CustomPostType;
$retrieveData = new RetrieveData;
$templates = new Templates;
$enqueueScripts = new EnqueueScripts;
