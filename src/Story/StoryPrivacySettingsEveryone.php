<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The story can be viewed by everyone
 */
class StoryPrivacySettingsEveryone extends StoryPrivacySettings
{
    public const TYPE_NAME = 'storyPrivacySettingsEveryone';

    /**
     * Identifiers of the users that can't see the story; always unknown and empty for non-owned stories
     *
     * @var int[]
     */
    protected array $exceptUserIds;

    public function __construct(array $exceptUserIds)
    {
        parent::__construct();

        $this->exceptUserIds = $exceptUserIds;
    }

    public static function fromArray(array $array): StoryPrivacySettingsEveryone
    {
        return new static(
            $array['except_user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'except_user_ids' => $this->exceptUserIds,
        ];
    }

    public function getExceptUserIds(): array
    {
        return $this->exceptUserIds;
    }
}
