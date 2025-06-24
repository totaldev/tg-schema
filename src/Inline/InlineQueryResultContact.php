<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Contact\Contact;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Represents a user contact.
 */
class InlineQueryResultContact extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultContact';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string     $id,
        /**
         * A user contact.
         */
        protected Contact    $contact,
        /**
         * Result thumbnail in JPEG format; may be null.
         */
        protected ?Thumbnail $thumbnail
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultContact
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['contact']),
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
        );
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'id'        => $this->id,
            'contact'   => $this->contact->typeSerialize(),
            'thumbnail' => $this->thumbnail ?? null,
        ];
    }
}
