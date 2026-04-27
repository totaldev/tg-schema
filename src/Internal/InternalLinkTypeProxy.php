<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\Proxy\Proxy;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a proxy. Call addProxy with the given parameters to process the link and add the proxy.
 */
class InternalLinkTypeProxy extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeProxy';

    public function __construct(
        /**
         * The proxy; may be null if the proxy is unsupported, in which case an alert can be shown to the user.
         */
        protected ?Proxy $proxy
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeProxy
    {
        return new static(
            proxy: (isset($array['proxy']) ? TdSchemaRegistry::fromArray($array['proxy']) : null),
        );
    }

    public function getProxy(): ?Proxy
    {
        return $this->proxy;
    }

    public function setProxy(?Proxy $value): static
    {
        $this->proxy = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'proxy' => (null !== $this->proxy ? $this->proxy->jsonSerialize() : null),
        ];
    }
}
