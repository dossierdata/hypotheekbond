<?php

namespace MortgageUnion\Enums;

use MyCLabs\Enum\Enum;

/**
 * Class MortgageStatus
 * @package MortgageUnion\Enums
 *
 * @method static CustomerMartialStatus ACTIVE()
 * @method static CustomerMartialStatus IN_PROGRESS()
 * @method static CustomerMartialStatus LEAD()
 * @method static CustomerMartialStatus CANCELLED()
 * @method static CustomerMartialStatus PROSPECT()
 * @method static CustomerMartialStatus UNKNOWN()
 *
 */
class MortgageStatus extends Enum
{
    const ACTIVE = 'Actief';
    const IN_PROGRESS = 'In behandeling';
    const LEAD = 'Lead';
    const CANCELLED = 'Vervallen';
    const PROSPECT = 'Prospect';
    const UNKNOWN = 'Onbekend';

}