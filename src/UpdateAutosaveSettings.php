<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Autosave settings for some type of chats were updated
 */
class UpdateAutosaveSettings extends Update
{
    public const TYPE_NAME = 'updateAutosaveSettings';

    /**
     * Type of chats for which autosave settings were updated
     *
     * @var AutosaveSettingsScope
     */
    protected AutosaveSettingsScope $scope;

    /**
     * The new autosave settings; may be null if the settings are reset to default
     *
     * @var ScopeAutosaveSettings|null
     */
    protected ?ScopeAutosaveSettings $settings;

    public function __construct(AutosaveSettingsScope $scope, ?ScopeAutosaveSettings $settings)
    {
        parent::__construct();

        $this->scope = $scope;
        $this->settings = $settings;
    }

    public static function fromArray(array $array): UpdateAutosaveSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            (isset($array['settings']) ? TdSchemaRegistry::fromArray($array['settings']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'scope' => $this->scope->typeSerialize(),
            'settings' => (isset($this->settings) ? $this->settings : null),
        ];
    }

    public function getScope(): AutosaveSettingsScope
    {
        return $this->scope;
    }

    public function getSettings(): ?ScopeAutosaveSettings
    {
        return $this->settings;
    }
}
