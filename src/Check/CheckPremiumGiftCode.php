<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Return information about a Telegram Premium gift code.
 */
class CheckPremiumGiftCode extends TdFunction
{
    public const TYPE_NAME = 'checkPremiumGiftCode';

    public function __construct(
        /**
         * The code to check.
         */
        protected string $code
    ) {}

    public static function fromArray(array $array): CheckPremiumGiftCode
    {
        return new static(
            $array['code'],
        );
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code'  => $this->code,
        ];
    }
}
