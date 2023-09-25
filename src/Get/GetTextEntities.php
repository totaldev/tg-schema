<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns all entities (mentions, hashtags, cashtags, bot commands, bank card numbers, URLs, and email addresses) found in the text. Can be called synchronously
 */
class GetTextEntities extends TdFunction
{
    public const TYPE_NAME = 'getTextEntities';

    /**
     * The text in which to look for entities
     *
     * @var string
     */
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public static function fromArray(array $array): GetTextEntities
    {
        return new static(
            $array['text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }
}
