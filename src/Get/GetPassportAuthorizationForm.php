<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a Telegram Passport authorization form for sharing data with a service.
 */
class GetPassportAuthorizationForm extends TdFunction
{
    public const string TYPE_NAME = 'getPassportAuthorizationForm';

    public function __construct(
        /**
         * User identifier of the service's bot.
         */
        protected int    $botUserId,
        /**
         * Telegram Passport element types requested by the service.
         */
        protected string $scope,
        /**
         * Service's public key.
         */
        protected string $publicKey,
        /**
         * Unique request identifier provided by the service.
         */
        protected string $nonce,
    ) {}

    public static function fromArray(array $array): GetPassportAuthorizationForm
    {
        return new static(
            $array['bot_user_id'],
            $array['scope'],
            $array['public_key'],
            $array['nonce'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getNonce(): string
    {
        return $this->nonce;
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setNonce(string $value): static
    {
        $this->nonce = $value;

        return $this;
    }

    public function setPublicKey(string $value): static
    {
        $this->publicKey = $value;

        return $this;
    }

    public function setScope(string $value): static
    {
        $this->scope = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'scope'       => $this->scope,
            'public_key'  => $this->publicKey,
            'nonce'       => $this->nonce,
        ];
    }
}
