<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Group;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class First extends Operator
{
    function getName()
    {
        return 'first';
    }
}