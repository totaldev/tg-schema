<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * Text that must be formatted as if inside pre, and code HTML tags.
 */
class TextEntityTypePreCode extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypePreCode';

    public function __construct(
        /**
         * Programming language of the code; as defined by the sender.
         */
        protected string $language
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypePreCode
    {
        return new static(
            $array['language'],
        );
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'language' => $this->language,
        ];
    }
}
