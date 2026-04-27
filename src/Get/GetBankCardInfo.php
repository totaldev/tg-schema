<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a bank card.
 */
class GetBankCardInfo extends TdFunction
{
    public const string TYPE_NAME = 'getBankCardInfo';

    public function __construct(
        /**
         * The bank card number.
         */
        protected string $bankCardNumber
    ) {}

    public static function fromArray(array $array): GetBankCardInfo
    {
        return new static(
            bankCardNumber: $array['bank_card_number'],
        );
    }

    public function getBankCardNumber(): string
    {
        return $this->bankCardNumber;
    }

    public function setBankCardNumber(string $value): static
    {
        $this->bankCardNumber = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'bank_card_number' => $this->bankCardNumber,
        ];
    }
}
