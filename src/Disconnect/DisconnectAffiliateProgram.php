<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Disconnect;

use Totaldev\TgSchema\Affiliate\AffiliateType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Disconnects an affiliate program from the given affiliate and immediately deactivates its referral link. Returns updated information about the disconnected
 * affiliate program.
 */
class DisconnectAffiliateProgram extends TdFunction
{
    public const string TYPE_NAME = 'disconnectAffiliateProgram';

    public function __construct(
        /**
         * The affiliate to which the affiliate program is connected.
         */
        protected AffiliateType $affiliate,
        /**
         * The referral link of the affiliate program.
         */
        protected string        $url,
    ) {}

    public static function fromArray(array $array): DisconnectAffiliateProgram
    {
        return new static(
            TdSchemaRegistry::fromArray($array['affiliate']),
            $array['url'],
        );
    }

    public function getAffiliate(): AffiliateType
    {
        return $this->affiliate;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setAffiliate(AffiliateType $value): static
    {
        $this->affiliate = $value;

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
            '@type'     => static::TYPE_NAME,
            'affiliate' => $this->affiliate->typeSerialize(),
            'url'       => $this->url,
        ];
    }
}
