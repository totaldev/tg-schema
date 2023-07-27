<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains an HTTPS URL, which can be used to get information about a user
 */
class UserLink extends TdObject
{
    public const TYPE_NAME = 'userLink';

    /**
     * The URL
     *
     * @var string
     */
    protected string $url;

    /**
     * Left time for which the link is valid, in seconds; 0 if the link is a public username link
     *
     * @var int
     */
    protected int $expiresIn;

    public function __construct(string $url, int $expiresIn)
    {
        $this->url = $url;
        $this->expiresIn = $expiresIn;
    }

    public static function fromArray(array $array): UserLink
    {
        return new static(
            $array['url'],
            $array['expires_in'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'expires_in' => $this->expiresIn,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }
}
