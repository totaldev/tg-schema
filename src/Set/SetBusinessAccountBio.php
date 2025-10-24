<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the bio of a business account; for bots only.
 */
class SetBusinessAccountBio extends TdFunction
{
    public const string TYPE_NAME = 'setBusinessAccountBio';

    public function __construct(
        /**
         * Unique identifier of business connection.
         */
        protected string $businessConnectionId,
        /**
         * The new value of the bio; 0-getOption("bio_length_max") characters without line feeds.
         */
        protected string $bio,
    ) {}

    public static function fromArray(array $array): SetBusinessAccountBio
    {
        return new static(
            $array['business_connection_id'],
            $array['bio'],
        );
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function setBio(string $value): static
    {
        $this->bio = $value;

        return $this;
    }

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'bio'                    => $this->bio,
        ];
    }
}
