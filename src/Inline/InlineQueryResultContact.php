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
    public const string TYPE_NAME = 'inlineQueryResultContact';

    public function __construct(
        /**
         * A user contact.
         */
        protected Contact    $contact,
        /**
         * Unique identifier of the query result.
         */
        protected string     $id,
        /**
         * Result thumbnail in JPEG format; may be null.
         */
        protected ?Thumbnail $thumbnail,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultContact
    {
        return new static(
            contact  : TdSchemaRegistry::fromArray($array['contact']),
            id       : $array['id'],
            thumbnail: (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
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

    public function setContact(Contact $value): static
    {
        $this->contact = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setThumbnail(?Thumbnail $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'contact'   => $this->contact->jsonSerialize(),
            'id'        => $this->id,
            'thumbnail' => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
        ];
    }
}
