<?php

namespace A6\CodeceptIsAwesomeBundle\Service;

class ReverseStringService
{
    public function reverse($string)
    {
        return strrev($string);
    }
}
