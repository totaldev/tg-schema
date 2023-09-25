<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains some text
 */
class Text extends TdObject
{
    public const TYPE_NAME = 'text';

    /**
     * Text
     *
     * @var string
     */
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public static function fromArray(array $array): Text
    {
        return new static(
            $array['text'],
        );
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text,
        ];
    }
}
