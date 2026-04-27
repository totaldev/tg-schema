<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Web;

use Totaldev\TgSchema\Internal\InternalLinkType;
use Totaldev\TgSchema\Page\PageBlock;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an instant view page for a web page.
 */
class WebPageInstantView extends TdObject
{
    public const string TYPE_NAME = 'webPageInstantView';

    public function __construct(
        /**
         * An internal link to be opened to leave feedback about the instant view.
         */
        protected InternalLinkType $feedbackLink,
        /**
         * True, if the instant view contains the full page. A network request might be needed to get the full instant view.
         */
        protected bool             $isFull,
        /**
         * True, if the instant view must be shown from right to left.
         */
        protected bool             $isRtl,
        /**
         * Content of the instant view page.
         *
         * @var PageBlock[]
         */
        protected array            $pageBlocks,
        /**
         * Version of the instant view; currently, can be 1 or 2.
         */
        protected int              $version,
        /**
         * Number of the instant view views; 0 if unknown.
         */
        protected int              $viewCount,
    ) {}

    public static function fromArray(array $array): WebPageInstantView
    {
        return new static(
            feedbackLink: TdSchemaRegistry::fromArray($array['feedback_link']),
            isFull      : $array['is_full'],
            isRtl       : $array['is_rtl'],
            pageBlocks  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['page_blocks']),
            version     : $array['version'],
            viewCount   : $array['view_count'],
        );
    }

    public function getFeedbackLink(): InternalLinkType
    {
        return $this->feedbackLink;
    }

    public function getIsFull(): bool
    {
        return $this->isFull;
    }

    public function getIsRtl(): bool
    {
        return $this->isRtl;
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function setFeedbackLink(InternalLinkType $value): static
    {
        $this->feedbackLink = $value;

        return $this;
    }

    public function setIsFull(bool $value): static
    {
        $this->isFull = $value;

        return $this;
    }

    public function setIsRtl(bool $value): static
    {
        $this->isRtl = $value;

        return $this;
    }

    public function setPageBlocks(array $value): static
    {
        $this->pageBlocks = $value;

        return $this;
    }

    public function setVersion(int $value): static
    {
        $this->version = $value;

        return $this;
    }

    public function setViewCount(int $value): static
    {
        $this->viewCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'feedback_link' => $this->feedbackLink->jsonSerialize(),
            'is_full'       => $this->isFull,
            'is_rtl'        => $this->isRtl,
            'page_blocks'   => array_map(static fn($x) => $x->jsonSerialize(), $this->pageBlocks),
            'version'       => $this->version,
            'view_count'    => $this->viewCount,
        ];
    }
}
