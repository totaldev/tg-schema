<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The sponsor is a website
 */
class MessageSponsorTypeWebsite extends MessageSponsorType
{
    public const TYPE_NAME = 'messageSponsorTypeWebsite';

    /**
     * URL of the website
     *
     * @var string
     */
    protected string $url;

    /**
     * Name of the website
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $url, string $name)
    {
        parent::__construct();

        $this->url = $url;
        $this->name = $name;
    }

    public static function fromArray(array $array): MessageSponsorTypeWebsite
    {
        return new static(
            $array['url'],
            $array['name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'name' => $this->name,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
