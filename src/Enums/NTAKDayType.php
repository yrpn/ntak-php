<?php

namespace Kiralyta\Ntak\Enums;

enum NTAKDayType: string
{
    case ADOTT_NAPON_ZARVA = 'Adott napon zárva';
    case FORGALOM_NELKULI_NAP = 'Forgalom nélküli nap';
    case NORMAL_NAP = 'Normál nap';
}