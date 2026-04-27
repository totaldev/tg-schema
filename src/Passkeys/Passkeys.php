<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passkeys;

use Totaldev\TgSchema\Passkey\Passkey;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of passkeys.
 */
class Passkeys extends TdObject
{
    public const string TYPE_NAME = 'passkeys';

    public function __construct(
        /**
         * List of passkeys.
         *
         * @var Passkey[]
         */
        protected array $passkeys
    ) {}

    public static function fromArray(array $array): Passkeys
    {
        return new static(
            passkeys: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['passkeys']),
        );
    }

    public function getPasskeys(): array
    {
        return $this->passkeys;
    }

    public function setPasskeys(array $value): static
    {
        $this->passkeys = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'passkeys' => array_map(static fn($x) => $x->jsonSerialize(), $this->passkeys),
        ];
    }
}
