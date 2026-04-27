<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a link preview.
 */
class LinkPreview extends TdObject
{
    public const string TYPE_NAME = 'linkPreview';

    public function __construct(
        /**
         * Author of the content.
         */
        protected string          $author,
        /**
         * Description of the content.
         */
        protected FormattedText   $description,
        /**
         * URL to display.
         */
        protected string          $displayUrl,
        /**
         * True, if size of media in the preview can be changed.
         */
        protected bool            $hasLargeMedia,
        /**
         * Version of instant view (currently, can be 1 or 2) for the web page; 0 if none.
         */
        protected int             $instantViewVersion,
        /**
         * True, if the link preview must be shown above message text; otherwise, the link preview must be shown below the message text.
         */
        protected bool            $showAboveText,
        /**
         * True, if large media preview must be shown; otherwise, the media preview must be shown small and only the first frame must be shown for videos.
         */
        protected bool            $showLargeMedia,
        /**
         * True, if media must be shown above link preview description; otherwise, the media must be shown below the description.
         */
        protected bool            $showMediaAboveDescription,
        /**
         * Short name of the site (e.g., Google Docs, App Store).
         */
        protected string          $siteName,
        /**
         * True, if there is no need to show an ordinary open URL confirmation, when opening the URL from the preview, because the URL is shown in the message text in clear.
         */
        protected bool            $skipConfirmation,
        /**
         * Title of the content.
         */
        protected string          $title,
        /**
         * Type of the link preview.
         */
        protected LinkPreviewType $type,
        /**
         * Original URL of the link.
         */
        protected string          $url,
    ) {}

    public static function fromArray(array $array): LinkPreview
    {
        return new static(
            author                   : $array['author'],
            description              : TdSchemaRegistry::fromArray($array['description']),
            displayUrl               : $array['display_url'],
            hasLargeMedia            : $array['has_large_media'],
            instantViewVersion       : $array['instant_view_version'],
            showAboveText            : $array['show_above_text'],
            showLargeMedia           : $array['show_large_media'],
            showMediaAboveDescription: $array['show_media_above_description'],
            siteName                 : $array['site_name'],
            skipConfirmation         : $array['skip_confirmation'],
            title                    : $array['title'],
            type                     : TdSchemaRegistry::fromArray($array['type']),
            url                      : $array['url'],
        );
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getDescription(): FormattedText
    {
        return $this->description;
    }

    public function getDisplayUrl(): string
    {
        return $this->displayUrl;
    }

    public function getHasLargeMedia(): bool
    {
        return $this->hasLargeMedia;
    }

    public function getInstantViewVersion(): int
    {
        return $this->instantViewVersion;
    }

    public function getShowAboveText(): bool
    {
        return $this->showAboveText;
    }

    public function getShowLargeMedia(): bool
    {
        return $this->showLargeMedia;
    }

    public function getShowMediaAboveDescription(): bool
    {
        return $this->showMediaAboveDescription;
    }

    public function getSiteName(): string
    {
        return $this->siteName;
    }

    public function getSkipConfirmation(): bool
    {
        return $this->skipConfirmation;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getType(): LinkPreviewType
    {
        return $this->type;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setAuthor(string $value): static
    {
        $this->author = $value;

        return $this;
    }

    public function setDescription(FormattedText $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setDisplayUrl(string $value): static
    {
        $this->displayUrl = $value;

        return $this;
    }

    public function setHasLargeMedia(bool $value): static
    {
        $this->hasLargeMedia = $value;

        return $this;
    }

    public function setInstantViewVersion(int $value): static
    {
        $this->instantViewVersion = $value;

        return $this;
    }

    public function setShowAboveText(bool $value): static
    {
        $this->showAboveText = $value;

        return $this;
    }

    public function setShowLargeMedia(bool $value): static
    {
        $this->showLargeMedia = $value;

        return $this;
    }

    public function setShowMediaAboveDescription(bool $value): static
    {
        $this->showMediaAboveDescription = $value;

        return $this;
    }

    public function setSiteName(string $value): static
    {
        $this->siteName = $value;

        return $this;
    }

    public function setSkipConfirmation(bool $value): static
    {
        $this->skipConfirmation = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setType(LinkPreviewType $value): static
    {
        $this->type = $value;

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
            '@type'                        => static::TYPE_NAME,
            'author'                       => $this->author,
            'description'                  => $this->description->jsonSerialize(),
            'display_url'                  => $this->displayUrl,
            'has_large_media'              => $this->hasLargeMedia,
            'instant_view_version'         => $this->instantViewVersion,
            'show_above_text'              => $this->showAboveText,
            'show_large_media'             => $this->showLargeMedia,
            'show_media_above_description' => $this->showMediaAboveDescription,
            'site_name'                    => $this->siteName,
            'skip_confirmation'            => $this->skipConfirmation,
            'title'                        => $this->title,
            'type'                         => $this->type->jsonSerialize(),
            'url'                          => $this->url,
        ];
    }
}
