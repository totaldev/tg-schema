<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Sends a new story. Returns a temporary story with identifier 0
 */
class SendStory extends TdFunction
{
    public const TYPE_NAME = 'sendStory';

    /**
     * Content of the story
     *
     * @var InputStoryContent
     */
    protected InputStoryContent $content;

    /**
     * Story caption; pass null to use an empty caption; 0-getOption("story_caption_length_max") characters
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * The privacy settings for the story
     *
     * @var StoryPrivacySettings
     */
    protected StoryPrivacySettings $privacySettings;

    /**
     * Period after which the story is moved to archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, 2 * 86400, 3 * 86400, or 7 * 86400 for Telegram Premium users, and 86400 otherwise
     *
     * @var int
     */
    protected int $activePeriod;

    /**
     * Pass true to keep the story accessible after expiration
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * Pass true if the content of the story must be protected from forwarding and screenshotting
     *
     * @var bool
     */
    protected bool $protectContent;

    public function __construct(
        InputStoryContent $content,
        FormattedText $caption,
        StoryPrivacySettings $privacySettings,
        int $activePeriod,
        bool $isPinned,
        bool $protectContent
    ) {
        $this->content = $content;
        $this->caption = $caption;
        $this->privacySettings = $privacySettings;
        $this->activePeriod = $activePeriod;
        $this->isPinned = $isPinned;
        $this->protectContent = $protectContent;
    }

    public static function fromArray(array $array): SendStory
    {
        return new static(
            TdSchemaRegistry::fromArray($array['content']),
            TdSchemaRegistry::fromArray($array['caption']),
            TdSchemaRegistry::fromArray($array['privacy_settings']),
            $array['active_period'],
            $array['is_pinned'],
            $array['protect_content'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'content' => $this->content->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
            'privacy_settings' => $this->privacySettings->typeSerialize(),
            'active_period' => $this->activePeriod,
            'is_pinned' => $this->isPinned,
            'protect_content' => $this->protectContent,
        ];
    }

    public function getContent(): InputStoryContent
    {
        return $this->content;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getPrivacySettings(): StoryPrivacySettings
    {
        return $this->privacySettings;
    }

    public function getActivePeriod(): int
    {
        return $this->activePeriod;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getProtectContent(): bool
    {
        return $this->protectContent;
    }
}
