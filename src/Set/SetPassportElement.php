<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputPassportElement;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds an element to the user's Telegram Passport. May return an error with a message "PHONE_VERIFICATION_NEEDED" or "EMAIL_VERIFICATION_NEEDED" if the chosen
 * phone number or the chosen email address must be verified first.
 */
class SetPassportElement extends TdFunction
{
    public const TYPE_NAME = 'setPassportElement';

    public function __construct(
        /**
         * Input Telegram Passport element.
         */
        protected InputPassportElement $element,
        /**
         * The 2-step verification password of the current user.
         */
        protected string               $password
    ) {}

    public static function fromArray(array $array): SetPassportElement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['element']),
            $array['password'],
        );
    }

    public function getElement(): InputPassportElement
    {
        return $this->element;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'element'  => $this->element->typeSerialize(),
            'password' => $this->password,
        ];
    }
}
