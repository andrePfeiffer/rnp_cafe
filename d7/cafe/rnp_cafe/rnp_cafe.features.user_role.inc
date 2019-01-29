<?php
/**
 * @file
 * rnp_cafe.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function rnp_cafe_user_default_roles() {
  $roles = array();

  // Exported role: Acesso: CAFe.
  $roles['Acesso: CAFe'] = array(
    'name' => 'Acesso: CAFe',
    'weight' => 22,
  );

  return $roles;
}
