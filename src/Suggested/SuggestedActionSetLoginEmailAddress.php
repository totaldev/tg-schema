<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to add login email address. Call isLoginEmailAddressRequired, and then setLoginEmailAddress or checkLoginEmailAddressCode to change the
 * login email address.
 */
class SuggestedActionSetLoginEmailAddress extends SuggestedAction
{
    public const string TYPE_NAME = 'suggestedActionSetLoginEmailAddress';

    public function __construct(
        /**
         * True, if the suggested action can be hidden using hideSuggestedAction. Otherwise, the user must not be able to use the application without setting up the email address.
         */
        protected bool $canBeHidden
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionSetLoginEmailAddress
    {
        return new static(
            canBeHidden: $array['can_be_hidden'],
        );
    }

    public function getCanBeHidden(): bool
    {
        return $this->canBeHidden;
    }

    public function setCanBeHidden(bool $value): static
    {
        $this->canBeHidden = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'can_be_hidden' => $this->canBeHidden,
        ];
    }
}
