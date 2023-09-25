<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The text uses Markdown-style formatting
 */
class TextParseModeMarkdown extends TextParseMode
{
    public const TYPE_NAME = 'textParseModeMarkdown';

    /**
     * Version of the parser: 0 or 1 - Telegram Bot API "Markdown" parse mode, 2 - Telegram Bot API "MarkdownV2" parse mode
     *
     * @var int
     */
    protected int $version;

    public function __construct(int $version)
    {
        parent::__construct();

        $this->version = $version;
    }

    public static function fromArray(array $array): TextParseModeMarkdown
    {
        return new static(
            $array['version'],
        );
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'version' => $this->version,
        ];
    }
}
