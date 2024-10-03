<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's utility bill.
 */
class InputPassportElementUtilityBill extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementUtilityBill';

    public function __construct(
        /**
         * The utility bill to be saved.
         */
        protected InputPersonalDocument $utilityBill
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementUtilityBill
    {
        return new static(
            TdSchemaRegistry::fromArray($array['utility_bill']),
        );
    }

    public function getUtilityBill(): InputPersonalDocument
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
