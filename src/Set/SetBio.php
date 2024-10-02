<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the bio of the current user.
 */
class SetBio extends TdFunction
{
    public const TYPE_NAME = 'setBio';

    public function __construct(
        /**
         * The new value of the user bio; 0-getOption("bio_length_max") characters without line feeds.
         */
        protected string $bio
    ) {}

    public static function fromArray(array $array): SetBio
    {
        return new static(
            $array['bio'],
        );
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bio'   => $this->bio,
        ];
    }
}
