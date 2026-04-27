<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes a business chat link of the current account.
 */
class DeleteBusinessChatLink extends TdFunction
{
    public const string TYPE_NAME = 'deleteBusinessChatLink';

    public function __construct(
        /**
         * The link to delete.
         */
        protected string $link
    ) {}

    public static function fromArray(array $array): DeleteBusinessChatLink
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
