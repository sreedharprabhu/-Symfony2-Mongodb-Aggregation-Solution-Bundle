<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Comparison;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Gt extends Operator
{
    function getName()
    {
        return 'gt';
    }
}