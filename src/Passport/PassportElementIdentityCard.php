<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\Identity\IdentityDocument;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element containing the user's identity card.
 */
class PassportElementIdentityCard extends PassportElement
{
    public const TYPE_NAME = 'passportElementIdentityCard';

    public function __construct(
        /**
         * Identity card.
         */
        protected IdentityDocument $identityCard
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementIdentityCard
    {
        return new static(
            TdSchemaRegistry::fromArray($array['identity_card']),
        );
    }

    public function getIdentityCard(): IdentityDocument
    {
        return $this->identityCard;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'identity_card' => $this->identityCard->typeSerialize(),
        ];
    }
}
