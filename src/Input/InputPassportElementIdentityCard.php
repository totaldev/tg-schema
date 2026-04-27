<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's identity card.
 */
class InputPassportElementIdentityCard extends InputPassportElement
{
    public const string TYPE_NAME = 'inputPassportElementIdentityCard';

    public function __construct(
        /**
         * The identity card to be saved.
         */
        protected InputIdentityDocument $identityCard
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementIdentityCard
    {
        return new static(
            identityCard: TdSchemaRegistry::fromArray($array['identity_card']),
        );
    }

    public function getIdentityCard(): InputIdentityDocument
    {
        return $this->identityCard;
    }

    public function setIdentityCard(InputIdentityDocument $value): static
    {
        $this->identityCard = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'identity_card' => $this->identityCard->jsonSerialize(),
        ];
    }
}
