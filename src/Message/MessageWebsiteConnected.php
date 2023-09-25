<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The current user has connected a website by logging in using Telegram Login Widget on it
 */
class MessageWebsiteConnected extends MessageContent
{
    public const TYPE_NAME = 'messageWebsiteConnected';

    /**
     * Domain name of the connected website
     *
     * @var string
     */
    protected string $domainName;

    public function __construct(string $domainName)
    {
        parent::__construct();

        $this->domainName = $domainName;
    }

    public static function fromArray(array $array): MessageWebsiteConnected
    {
        return new static(
            $array['domain_name'],
        );
    }

    public function getDomainName(): string
    {
        return $this->domainName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'domain_name' => $this->domainName,
        ];
    }
}
