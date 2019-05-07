<?php

namespace GlobalPayments\Api\Entities\Enums;

use GlobalPayments\Api\Entities\Enum;

class TransactionType extends Enum
{
    const UTC = "UTC";
    const MERCHANT = "Merchant";
    const DATACENTER = "Datacenter";
}
