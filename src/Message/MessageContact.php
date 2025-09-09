<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Contact\Contact;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a user contact.
 */
class MessageContact extends MessageContent
{
    public const TYPE_NAME = 'messageContact';

    public function __construct(
        /**
         * The contact description.
         */
        protected Contact $contact
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageContact
    {
        return new static(
            TdSchemaRegistry::fromArray($array['contact']),
        );
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'contact' => $this->contact->typeSerialize(),
        ];
    }
}
