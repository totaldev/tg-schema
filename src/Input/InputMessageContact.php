<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Contact\Contact;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message containing a user contact.
 */
class InputMessageContact extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageContact';

    public function __construct(
        /**
         * Contact to send.
         */
        protected Contact $contact
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageContact
    {
        return new static(
            TdSchemaRegistry::fromArray($array['contact']),
        );
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function setContact(Contact $value): static
    {
        $this->contact = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'contact' => $this->contact->typeSerialize(),
        ];
    }
}
