<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Authentication;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An authentication code is delivered to https://fragment.com. The user must be logged in there via a wallet owning the phone number's NFT
 */
class AuthenticationCodeTypeFragment extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeFragment';

    /**
     * URL to open to receive the code
     *
     * @var string
     */
    protected string $url;

    /**
     * Length of the code
     *
     * @var int
     */
    protected int $length;

    public function __construct(string $url, int $length)
    {
        parent::__construct();

        $this->url = $url;
        $this->length = $length;
    }

    public static function fromArray(array $array): AuthenticationCodeTypeFragment
    {
        return new static(
            $array['url'],
            $array['length'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'length' => $this->length,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getLength(): int
    {
        return $this->length;
    }
}
