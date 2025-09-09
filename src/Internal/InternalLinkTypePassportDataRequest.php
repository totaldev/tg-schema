<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link contains a request of Telegram passport data. Call getPassportAuthorizationForm with the given parameters to process the link if the link was
 * received from outside of the application; otherwise, ignore it.
 */
class InternalLinkTypePassportDataRequest extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePassportDataRequest';

    public function __construct(
        /**
         * User identifier of the service's bot; the corresponding user may be unknown yet.
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
        /**
         * An HTTP URL to open once the request is finished, canceled, or failed with the parameters tg_passport=success, tg_passport=cancel, or tg_passport=error&error=... respectively. If empty, then onActivityResult method must be used to return response on Android, or the link tgbot{bot_user_id}://passport/success or tgbot{bot_user_id}://passport/cancel must be opened otherwise.
         */
        protected string $callbackUrl,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypePassportDataRequest
    {
        return new static(
            $array['bot_user_id'],
            $array['scope'],
            $array['public_key'],
            $array['nonce'],
            $array['callback_url'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'bot_user_id'  => $this->botUserId,
            'scope'        => $this->scope,
            'public_key'   => $this->publicKey,
            'nonce'        => $this->nonce,
            'callback_url' => $this->callbackUrl,
        ];
    }
}
