<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The sponsor is a website
 */
class MessageSponsorTypeWebsite extends MessageSponsorType
{
    public const TYPE_NAME = 'messageSponsorTypeWebsite';

    /**
     * Name of the website
     *
     * @var string
     */
    protected string $name;

    /**
     * URL of the website
     *
     * @var string
     */
    protected string $url;

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

    public function getName(): string
    {
        return $this->name;
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
            'name' => $this->name,
        ];
    }
}
