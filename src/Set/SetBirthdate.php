<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Birthdate\Birthdate;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the birthdate of the current user.
 */
class SetBirthdate extends TdFunction
{
    public const string TYPE_NAME = 'setBirthdate';

    public function __construct(
        /**
         * The new value of the current user's birthdate; pass null to remove the birthdate.
         */
        protected ?Birthdate $birthdate = null
    ) {}

    public static function fromArray(array $array): SetBirthdate
    {
        return new static(
            birthdate: (isset($array['birthdate']) ? TdSchemaRegistry::fromArray($array['birthdate']) : null),
        );
    }

    public function getBirthdate(): ?Birthdate
    {
        return $this->birthdate;
    }

    public function setBirthdate(?Birthdate $value): static
    {
        $this->birthdate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'birthdate' => (null !== $this->birthdate ? $this->birthdate->jsonSerialize() : null),
        ];
    }
}
