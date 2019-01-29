<?php
/**
 * @file
 * rnp_cafe.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function rnp_cafe_default_rules_configuration() {
  $items = array();
  $items['rules_rnp_cafe_role_assign'] = entity_import('rules_config', '{ "rules_rnp_cafe_role_assign" : {
      "LABEL" : "RNP CAFe: Role assign",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "rules", "shib_auth_rules" ],
      "ON" : { "user_login_shibboleth" : [] },
      "IF" : [
        { "NOT user_has_role" : {
            "account" : [ "site:current-user" ],
            "roles" : { "value" : { "22" : "22" } }
          }
        }
      ],
      "DO" : [
        { "user_add_role" : {
            "account" : [ "site:current-user" ],
            "roles" : { "value" : { "22" : "22" } }
          }
        }
      ]
    }
  }');
  return $items;
}
