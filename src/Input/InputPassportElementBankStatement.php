<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's bank statement.
 */
class InputPassportElementBankStatement extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementBankStatement';

    public function __construct(
        /**
         * The bank statement to be saved.
         */
        protected InputPersonalDocument $bankStatement
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementBankStatement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['bank_statement']),
        );
    }

    public function getBankStatement(): InputPersonalDocument
    {
        return $this->bankStatement;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'bank_statement' => $this->bankStatement->typeSerialize(),
        ];
    }
}
