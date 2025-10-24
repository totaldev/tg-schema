<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Post;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Input\InputStoryAreas;
use Totaldev\TgSchema\Input\InputStoryContent;
use Totaldev\TgSchema\Story\StoryFullId;
use Totaldev\TgSchema\Story\StoryPrivacySettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Posts a new story on behalf of a chat; requires can_post_stories administrator right for supergroup and channel chats. Returns a temporary story.
 */
class PostStory extends TdFunction
{
    public const string TYPE_NAME = 'postStory';

    public function __construct(
        /**
         * Identifier of the chat that will post the story. Pass Saved Messages chat identifier when posting a story on behalf of the current user.
         */
        protected int                  $chatId,
        /**
         * Content of the story.
         */
        protected InputStoryContent    $content,
        /**
         * The privacy settings for the story; ignored for stories posted on behalf of supergroup and channel chats.
         */
        protected StoryPrivacySettings $privacySettings,
        /**
         * Identifiers of story albums to which the story will be added upon posting. An album can have up to getOption("story_album_story_count_max").
         *
         * @var int[]
         */
        protected array                $albumIds,
        /**
         * Period after which the story is moved to archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400 for Telegram Premium users, and 86400 otherwise.
         */
        protected int                  $activePeriod,
        /**
         * Pass true to keep the story accessible after expiration.
         */
        protected bool                 $isPostedToChatPage,
        /**
         * Pass true if the content of the story must be protected from forwarding and screenshotting.
         */
        protected bool                 $protectContent,
        /**
         * Clickable rectangle areas to be shown on the story media; pass null if none.
         */
        protected ?InputStoryAreas     $areas = null,
        /**
         * Story caption; pass null to use an empty caption; 0-getOption("story_caption_length_max") characters; can have entities only if getOption("can_use_text_entities_in_story_caption").
         */
        protected ?FormattedText       $caption = null,
        /**
         * Full identifier of the original story, which content was used to create the story; pass null if the story isn't repost of another story.
         */
        protected ?StoryFullId         $fromStoryFullId = null,
    ) {}

    public static function fromArray(array $array): PostStory
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['content']),
            isset($array['areas']) ? TdSchemaRegistry::fromArray($array['areas']) : null,
            isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null,
            TdSchemaRegistry::fromArray($array['privacy_settings']),
            $array['album_ids'],
            $array['active_period'],
            isset($array['from_story_full_id']) ? TdSchemaRegistry::fromArray($array['from_story_full_id']) : null,
            $array['is_posted_to_chat_page'],
            $array['protect_content'],
        );
    }

    public function getActivePeriod(): int
    {
        return $this->activePeriod;
    }

    public function getAlbumIds(): array
    {
        return $this->albumIds;
    }

    public function getAreas(): ?InputStoryAreas
    {
        return $this->areas;
    }

    public function getCaption(): ?FormattedText
    {
        return $this->caption;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getContent(): InputStoryContent
    {
        return $this->content;
    }

    public function getFromStoryFullId(): ?StoryFullId
    {
        return $this->fromStoryFullId;
    }

    public function getIsPostedToChatPage(): bool
    {
        return $this->isPostedToChatPage;
    }

    public function getPrivacySettings(): StoryPrivacySettings
    {
        return $this->privacySettings;
    }

    public function getProtectContent(): bool
    {
        return $this->protectContent;
    }

    public function setActivePeriod(int $value): static
    {
        $this->activePeriod = $value;

        return $this;
    }

    public function setAlbumIds(array $value): static
    {
        $this->albumIds = $value;

        return $this;
    }

    public function setAreas(?InputStoryAreas $value): static
    {
        $this->areas = $value;

        return $this;
    }

    public function setCaption(?FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setContent(InputStoryContent $value): static
    {
        $this->content = $value;

        return $this;
    }

    public function setFromStoryFullId(?StoryFullId $value): static
    {
        $this->fromStoryFullId = $value;

        return $this;
    }

    public function setIsPostedToChatPage(bool $value): static
    {
        $this->isPostedToChatPage = $value;

        return $this;
    }

    public function setPrivacySettings(StoryPrivacySettings $value): static
    {
        $this->privacySettings = $value;

        return $this;
    }

    public function setProtectContent(bool $value): static
    {
        $this->protectContent = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'content'                => $this->content->typeSerialize(),
            'areas'                  => $this->areas ?? null,
            'caption'                => $this->caption ?? null,
            'privacy_settings'       => $this->privacySettings->typeSerialize(),
            'album_ids'              => $this->albumIds,
            'active_period'          => $this->activePeriod,
            'from_story_full_id'     => $this->fromStoryFullId ?? null,
            'is_posted_to_chat_page' => $this->isPostedToChatPage,
            'protect_content'        => $this->protectContent,
        ];
    }
}
