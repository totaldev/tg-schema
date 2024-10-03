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
    public const TYPE_NAME = 'inlineQueryResultDocument';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string   $id,
        /**
         * Document.
         */
        protected Document $document,
        /**
         * Document title.
         */
        protected string   $title,
        /**
         * Document description.
         */
        protected string   $description,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultDocument
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['document']),
            $array['title'],
            $array['description'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'document'    => $this->document->typeSerialize(),
            'title'       => $this->title,
            'description' => $this->description,
        ];
    }
}
