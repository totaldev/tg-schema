<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

/**
 * The user connected a website by logging in using Telegram Login Widget on it.
 */
class BotWriteAccessAllowReasonConnectedWebsite extends BotWriteAccessAllowReason
{
    public const string TYPE_NAME = 'botWriteAccessAllowReasonConnectedWebsite';

    public function __construct(
        /**
         * Domain name of the connected website.
         */
        protected string $domainName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BotWriteAccessAllowReasonConnectedWebsite
    {
        return new static(
            $array['domain_name'],
        );
    }

    public function getDomainName(): string
    {
        return $this->domainName;
    }

    public function setDomainName(string $value): static
    {
        $this->domainName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'domain_name' => $this->domainName,
        ];
    }
}
