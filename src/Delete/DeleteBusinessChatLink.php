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
    public const TYPE_NAME = 'deleteBusinessChatLink';

    public function __construct(
        /**
         * The link to delete.
         */
        protected string $link
    ) {}

    public static function fromArray(array $array): DeleteBusinessChatLink
    {
        return new static(
            $array['link'],
        );
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link'  => $this->link,
        ];
    }
}
