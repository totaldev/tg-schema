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
    public const string TYPE_NAME = 'messagePassportDataReceived';

    public function __construct(
        /**
         * Encrypted data credentials.
         */
        protected EncryptedCredentials $credentials,
        /**
         * List of received Telegram Passport elements.
         *
         * @var EncryptedPassportElement[]
         */
        protected array                $elements,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePassportDataReceived
    {
        return new static(
            credentials: TdSchemaRegistry::fromArray($array['credentials']),
            elements   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['elements']),
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

    public function setCredentials(EncryptedCredentials $value): static
    {
        $this->credentials = $value;

        return $this;
    }

    public function setElements(array $value): static
    {
        $this->elements = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'credentials' => $this->credentials->jsonSerialize(),
            'elements'    => array_map(static fn($x) => $x->jsonSerialize(), $this->elements),
        ];
    }
}
