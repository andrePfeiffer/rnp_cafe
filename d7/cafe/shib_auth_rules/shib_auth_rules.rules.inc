<?php

/**
 * Implements hook_rules_event_info().
 */
function shib_auth_rules_rules_event_info() {
  return array(
    'user_login_shibboleth' => array(
      'label' => t('User is logged in via Shibboleth'),
      'module' => 'shib_auth_rules',
      'arguments' => array(
        'account' => array(
          'type' => 'user',
          'label' => t('The user is logged in.')
        ),
      ),
      'group' => t('User'),
    ),
  );
}
