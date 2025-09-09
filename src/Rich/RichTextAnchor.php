<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

/**
 * An anchor.
 */
class RichTextAnchor extends RichText
{
    public const TYPE_NAME = 'richTextAnchor';

    public function __construct(
        /**
         * Anchor name.
         */
        protected string $name
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTextAnchor
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
