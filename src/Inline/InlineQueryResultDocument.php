<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Document\Document;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a document.
 */
class InlineQueryResultDocument extends InlineQueryResult
{
    public const string TYPE_NAME = 'inlineQueryResultDocument';

    public function __construct(
        /**
         * Document description.
         */
        protected string   $description,
        /**
         * Document.
         */
        protected Document $document,
        /**
         * Unique identifier of the query result.
         */
        protected string   $id,
        /**
         * Document title.
         */
        protected string   $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultDocument
    {
        return new static(
            description: $array['description'],
            document   : TdSchemaRegistry::fromArray($array['document']),
            id         : $array['id'],
            title      : $array['title'],
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setDocument(Document $value): static
    {
        $this->document = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'description' => $this->description,
            'document'    => $this->document->jsonSerialize(),
            'id'          => $this->id,
            'title'       => $this->title,
        ];
    }
}
