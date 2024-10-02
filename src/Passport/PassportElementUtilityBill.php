<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Personal\PersonalDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's utility bill.
 */
class PassportElementUtilityBill extends PassportElement
{
    public const TYPE_NAME = 'passportElementUtilityBill';

    public function __construct(
        /**
         * Utility bill.
         */
        protected PersonalDocument $utilityBill
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementUtilityBill
    {
        return new static(
            TdSchemaRegistry::fromArray($array['utility_bill']),
        );
    }

    public function getUtilityBill(): PersonalDocument
    {
        return $this->utilityBill;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'utility_bill' => $this->utilityBill->typeSerialize(),
        ];
    }
}
