<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Internal\InternalLinkType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns an HTTPS or a tg: link with the given type. Can be called before authorization.
 */
class GetInternalLink extends TdFunction
{
    public const TYPE_NAME = 'getInternalLink';

    public function __construct(
        /**
         * Expected type of the link.
         */
        protected InternalLinkType $type,
        /**
         * Pass true to create an HTTPS link (only available for some link types); pass false to create a tg: link.
         */
        protected bool             $isHttp
    ) {}

    public static function fromArray(array $array): GetInternalLink
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['is_http'],
        );
    }

    public function getIsHttp(): bool
    {
        return $this->isHttp;
    }

    public function getType(): InternalLinkType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'type'    => $this->type->typeSerialize(),
            'is_http' => $this->isHttp,
        ];
    }
}
