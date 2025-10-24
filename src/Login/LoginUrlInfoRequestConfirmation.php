<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Login;

/**
 * An authorization confirmation dialog needs to be shown to the user.
 */
class LoginUrlInfoRequestConfirmation extends LoginUrlInfo
{
    public const string TYPE_NAME = 'loginUrlInfoRequestConfirmation';

    public function __construct(
        /**
         * An HTTP URL to be opened.
         */
        protected string $url,
        /**
         * A domain of the URL.
         */
        protected string $domain,
        /**
         * User identifier of a bot linked with the website.
         */
        protected int    $botUserId,
        /**
         * True, if the user must be asked for the permission to the bot to send them messages.
         */
        protected bool   $requestWriteAccess,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LoginUrlInfoRequestConfirmation
    {
        return new static(
            $array['url'],
            $array['domain'],
            $array['bot_user_id'],
            $array['request_write_access'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function getRequestWriteAccess(): bool
    {
        return $this->requestWriteAccess;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setDomain(string $value): static
    {
        $this->domain = $value;

        return $this;
    }

    public function setRequestWriteAccess(bool $value): static
    {
        $this->requestWriteAccess = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'url'                  => $this->url,
            'domain'               => $this->domain,
            'bot_user_id'          => $this->botUserId,
            'request_write_access' => $this->requestWriteAccess,
        ];
    }
}
