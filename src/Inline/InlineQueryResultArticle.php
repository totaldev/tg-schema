<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Represents a link to an article or web page
 */
class InlineQueryResultArticle extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultArticle';

    /**
     * A short description of the result
     *
     * @var string
     */
    protected string $description;

    /**
     * True, if the URL must be not shown
     *
     * @var bool
     */
    protected bool $hideUrl;

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * Result thumbnail in JPEG format; may be null
     *
     * @var Thumbnail|null
     */
    protected ?Thumbnail $thumbnail;

    /**
     * Title of the result
     *
     * @var string
     */
    protected string $title;

    /**
     * URL of the result, if it exists
     *
     * @var string
     */
    protected string $url;

    public function __construct(
        string     $id,
        string     $url,
        bool       $hideUrl,
        string     $title,
        string     $description,
        ?Thumbnail $thumbnail,
    )
    {
        parent::__construct();

        $this->id = $id;
        $this->url = $url;
        $this->hideUrl = $hideUrl;
        $this->title = $title;
        $this->description = $description;
        $this->thumbnail = $thumbnail;
    }

    public static function fromArray(array $array): InlineQueryResultArticle
    {
        return new static(
            $array['id'],
            $array['url'],
            $array['hide_url'],
            $array['title'],
            $array['description'],
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getHideUrl(): bool
    {
        return $this->hideUrl;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'url' => $this->url,
            'hide_url' => $this->hideUrl,
            'title' => $this->title,
            'description' => $this->description,
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
        ];
    }
}
