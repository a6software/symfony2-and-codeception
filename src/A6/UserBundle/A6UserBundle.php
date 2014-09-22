<?php

namespace A6\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class A6UserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
