<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Telegram\TelegramPaymentPurpose;

/**
 * An invoice for a payment toward Telegram; must not be used in the in-store apps.
 */
class InputInvoiceTelegram extends InputInvoice
{
    public const TYPE_NAME = 'inputInvoiceTelegram';

    public function __construct(
        /**
         * Transaction purpose.
         */
        protected TelegramPaymentPurpose $purpose
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInvoiceTelegram
    {
        return new static(
            TdSchemaRegistry::fromArray($array['purpose']),
        );
    }

    public function getPurpose(): TelegramPaymentPurpose
    {
        return $this->purpose;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'purpose' => $this->purpose->typeSerialize(),
        ];
    }
}
