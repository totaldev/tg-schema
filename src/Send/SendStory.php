<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Input\InputStoryAreas;
use Totaldev\TgSchema\Input\InputStoryContent;
use Totaldev\TgSchema\Story\StoryPrivacySettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a new story to a chat; requires can_post_stories rights for channel chats. Returns a temporary story
 */
class SendStory extends TdFunction
{
    public const TYPE_NAME = 'sendStory';

    /**
     * Identifier of the chat that will post the story
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Content of the story
     *
     * @var InputStoryContent
     */
    protected InputStoryContent $content;

    /**
     * Clickable rectangle areas to be shown on the story media; pass null if none
     *
     * @var InputStoryAreas
     */
    protected InputStoryAreas $areas;

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
     * Period after which the story is moved to archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400 for Telegram Premium users, and 86400 otherwise
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
        int $chatId,
        InputStoryContent $content,
        InputStoryAreas $areas,
        FormattedText $caption,
        StoryPrivacySettings $privacySettings,
        int $activePeriod,
        bool $isPinned,
        bool $protectContent,
    ) {
        $this->chatId = $chatId;
        $this->content = $content;
        $this->areas = $areas;
        $this->caption = $caption;
        $this->privacySettings = $privacySettings;
        $this->activePeriod = $activePeriod;
        $this->isPinned = $isPinned;
        $this->protectContent = $protectContent;
    }

    public static function fromArray(array $array): SendStory
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['content']),
            TdSchemaRegistry::fromArray($array['areas']),
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
            'chat_id' => $this->chatId,
            'content' => $this->content->typeSerialize(),
            'areas' => $this->areas->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
            'privacy_settings' => $this->privacySettings->typeSerialize(),
            'active_period' => $this->activePeriod,
            'is_pinned' => $this->isPinned,
            'protect_content' => $this->protectContent,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getContent(): InputStoryContent
    {
        return $this->content;
    }

    public function getAreas(): InputStoryAreas
    {
        return $this->areas;
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
