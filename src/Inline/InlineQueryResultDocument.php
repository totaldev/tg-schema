<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Document\Document;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a document
 */
class InlineQueryResultDocument extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultDocument';

    /**
     * Document description
     *
     * @var string
     */
    protected string $description;

    /**
     * Document
     *
     * @var Document
     */
    protected Document $document;

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * Document title
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $id, Document $document, string $title, string $description)
    {
        parent::__construct();

        $this->id = $id;
        $this->document = $document;
        $this->title = $title;
        $this->description = $description;
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
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'document' => $this->document->typeSerialize(),
            'title' => $this->title,
            'description' => $this->description,
        ];
    }
}
