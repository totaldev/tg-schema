<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Collectible;

/**
 * A username.
 */
class CollectibleItemTypeUsername extends CollectibleItemType
{
    public const TYPE_NAME = 'collectibleItemTypeUsername';

    public function __construct(
        /**
         * The username.
         */
        protected string $username
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CollectibleItemTypeUsername
    {
        return new static(
            $array['username'],
        );
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'username' => $this->username,
        ];
    }
}
