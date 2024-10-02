<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Encrypted\EncryptedCredentials;
use Totaldev\TgSchema\Encrypted\EncryptedPassportElement;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Telegram Passport data has been received; for bots only.
 */
class MessagePassportDataReceived extends MessageContent
{
    public const TYPE_NAME = 'messagePassportDataReceived';

    public function __construct(
        /**
         * List of received Telegram Passport elements.
         *
         * @var EncryptedPassportElement[]
         */
        protected array                $elements,
        /**
         * Encrypted data credentials.
         */
        protected EncryptedCredentials $credentials,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePassportDataReceived
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['elements']),
            TdSchemaRegistry::fromArray($array['credentials']),
        );
    }

    public function getCredentials(): EncryptedCredentials
    {
        return $this->credentials;
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->elements),
            'credentials' => $this->credentials->typeSerialize(),
        ];
    }
}
