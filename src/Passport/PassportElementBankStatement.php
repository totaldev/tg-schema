<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Personal\PersonalDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's bank statement.
 */
class PassportElementBankStatement extends PassportElement
{
    public const string TYPE_NAME = 'passportElementBankStatement';

    public function __construct(
        /**
         * Bank statement.
         */
        protected PersonalDocument $bankStatement
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementBankStatement
    {
        return new static(
            bankStatement: TdSchemaRegistry::fromArray($array['bank_statement']),
        );
    }

    public function getBankStatement(): PersonalDocument
    {
        return $this->bankStatement;
    }

    public function setBankStatement(PersonalDocument $value): static
    {
        $this->bankStatement = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'bank_statement' => $this->bankStatement->jsonSerialize(),
        ];
    }
}
