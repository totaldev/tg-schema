<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes privacy settings of a previously sent story
 */
class SetStoryPrivacySettings extends TdFunction
{
    public const TYPE_NAME = 'setStoryPrivacySettings';

    /**
     * Identifier of the story
     *
     * @var int
     */
    protected int $storyId;

    /**
     * The new privacy settigs for the story
     *
     * @var StoryPrivacySettings
     */
    protected StoryPrivacySettings $privacySettings;

    public function __construct(int $storyId, StoryPrivacySettings $privacySettings)
    {
        $this->storyId = $storyId;
        $this->privacySettings = $privacySettings;
    }

    public static function fromArray(array $array): SetStoryPrivacySettings
    {
        return new static(
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['privacy_settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_id' => $this->storyId,
            'privacy_settings' => $this->privacySettings->typeSerialize(),
        ];
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getPrivacySettings(): StoryPrivacySettings
    {
        return $this->privacySettings;
    }
}
