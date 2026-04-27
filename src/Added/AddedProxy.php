<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Added;

use Totaldev\TgSchema\Proxy\Proxy;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a proxy server added to the list of proxies.
 */
class AddedProxy extends TdObject
{
    public const string TYPE_NAME = 'addedProxy';

    public function __construct(
        /**
         * Unique identifier of the proxy.
         */
        protected int   $id,
        /**
         * True, if the proxy is enabled now.
         */
        protected bool  $isEnabled,
        /**
         * Point in time (Unix timestamp) when the proxy was last used; 0 if never.
         */
        protected int   $lastUsedDate,
        /**
         * The proxy.
         */
        protected Proxy $proxy,
    ) {}

    public static function fromArray(array $array): AddedProxy
    {
        return new static(
            id          : $array['id'],
            isEnabled   : $array['is_enabled'],
            lastUsedDate: $array['last_used_date'],
            proxy       : TdSchemaRegistry::fromArray($array['proxy']),
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getLastUsedDate(): int
    {
        return $this->lastUsedDate;
    }

    public function getProxy(): Proxy
    {
        return $this->proxy;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsEnabled(bool $value): static
    {
        $this->isEnabled = $value;

        return $this;
    }

    public function setLastUsedDate(int $value): static
    {
        $this->lastUsedDate = $value;

        return $this;
    }

    public function setProxy(Proxy $value): static
    {
        $this->proxy = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'id'             => $this->id,
            'is_enabled'     => $this->isEnabled,
            'last_used_date' => $this->lastUsedDate,
            'proxy'          => $this->proxy->jsonSerialize(),
        ];
    }
}
