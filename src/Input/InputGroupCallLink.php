<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * The group call is accessible through a link.
 */
class InputGroupCallLink extends InputGroupCall
{
    public const string TYPE_NAME = 'inputGroupCallLink';

    public function __construct(
        /**
         * The link for the group call.
         */
        protected string $link
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputGroupCallLink
    {
        return new static(
            link: $array['link'],
        );
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $value): static
    {
        $this->link = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link'  => $this->link,
        ];
    }
}
