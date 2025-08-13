<?php

namespace App\Enums;

enum RecommendedModel: int
{
    case WEIBULL2 = 1;
    case WEIBULL3 = 2;
    case LOGNORMAL = 3;
    case EXPONENTIAL = 4;
    case NORMAL = 5;
}
