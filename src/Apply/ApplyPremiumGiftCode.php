<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Apply;

use Totaldev\TgSchema\TdFunction;

/**
 * Applies a Telegram Premium gift code.
 */
class ApplyPremiumGiftCode extends TdFunction
{
    public const string TYPE_NAME = 'applyPremiumGiftCode';

    public function __construct(
        /**
         * The code to apply.
         */
        protected string $code
    ) {}

    public static function fromArray(array $array): ApplyPremiumGiftCode
    {
        return new static(
            $array['code'],
        );
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $value): static
    {
        $this->code = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'code'  => $this->code,
        ];
    }
}
