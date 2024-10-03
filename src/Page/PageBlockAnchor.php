<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

/**
 * An invisible anchor on a page, which can be used in a URL to open the page from the specified anchor.
 */
class PageBlockAnchor extends PageBlock
{
    public const TYPE_NAME = 'pageBlockAnchor';

    public function __construct(
        /**
         * Name of the anchor.
         */
        protected string $name
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockAnchor
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
