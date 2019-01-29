<?php
/**
 * @file
 * rnp_cafe.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function rnp_cafe_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer shibboleth authentication'.
  $permissions['administer shibboleth authentication'] = array(
    'name' => 'administer shibboleth authentication',
    'roles' => array(
      'Acesso: Super-administrador' => 'Acesso: Super-administrador',
    ),
    'module' => 'shib_auth',
  );

  return $permissions;
}
