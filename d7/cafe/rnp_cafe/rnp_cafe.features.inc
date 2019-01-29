<?php
/**
 * @file
 * rnp_cafe.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function rnp_cafe_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
