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
         * The new value of the bio; 0-getOption("bio_length_max") characters without line feeds.
         */
        protected string $bio,
        /**
         * Unique identifier of business connection.
         */
        protected string $businessConnectionId,
    ) {}

    public static function fromArray(array $array): SetBusinessAccountBio
    {
        return new static(
            bio                 : $array['bio'],
            businessConnectionId: $array['business_connection_id'],
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
            'bio'                    => $this->bio,
            'business_connection_id' => $this->businessConnectionId,
        ];
    }
}
