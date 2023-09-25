<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Login;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An authorization confirmation dialog needs to be shown to the user
 */
class LoginUrlInfoRequestConfirmation extends LoginUrlInfo
{
    public const TYPE_NAME = 'loginUrlInfoRequestConfirmation';

    /**
     * User identifier of a bot linked with the website
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * A domain of the URL
     *
     * @var string
     */
    protected string $domain;

    /**
     * True, if the user must be asked for the permission to the bot to send them messages
     *
     * @var bool
     */
    protected bool $requestWriteAccess;

    /**
     * An HTTP URL to be opened
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url, string $domain, int $botUserId, bool $requestWriteAccess)
    {
        parent::__construct();

        $this->url = $url;
        $this->domain = $domain;
        $this->botUserId = $botUserId;
        $this->requestWriteAccess = $requestWriteAccess;
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'domain' => $this->domain,
            'bot_user_id' => $this->botUserId,
            'request_write_access' => $this->requestWriteAccess,
        ];
    }
}
