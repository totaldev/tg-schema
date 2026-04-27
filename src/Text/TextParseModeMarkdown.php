<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * The text uses Markdown-style formatting.
 */
class TextParseModeMarkdown extends TextParseMode
{
    public const string TYPE_NAME = 'textParseModeMarkdown';

    public function __construct(
        /**
         * Version of the parser: 0 or 1 - Telegram Bot API "Markdown" parse mode, 2 - Telegram Bot API "MarkdownV2" parse mode.
         */
        protected int $version
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TextParseModeMarkdown
    {
        return new static(
            version: $array['version'],
        );
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setVersion(int $value): static
    {
        $this->version = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'version' => $this->version,
        ];
    }
}
