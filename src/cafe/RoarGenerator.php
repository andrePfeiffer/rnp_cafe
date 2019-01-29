<?php

namespace Drupal\rnp_cafe\cafe;

class RoarGenerator
{
    public function getRoar($length)
    {
        return 'Ol' . str_repeat('a', $length) . ' mundo!';
    }
}