<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The story can be viewed by all contacts except chosen users
 */
class StoryPrivacySettingsContacts extends StoryPrivacySettings
{
    public const TYPE_NAME = 'storyPrivacySettingsContacts';

    /**
     * User identifiers of the contacts that can't see the story; always unknown and empty for non-owned stories
     *
     * @var int[]
     */
    protected array $exceptUserIds;

    public function __construct(array $exceptUserIds)
    {
        parent::__construct();

        $this->exceptUserIds = $exceptUserIds;
    }

    public static function fromArray(array $array): StoryPrivacySettingsContacts
    {
        return new static(
            $array['except_user_ids'],
        );
    }

    public function getExceptUserIds(): array
    {
        return $this->exceptUserIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'except_user_ids' => $this->exceptUserIds,
        ];
    }
}
