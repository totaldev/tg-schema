<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Autosave\AutosaveSettingsScope;
use Totaldev\TgSchema\Scope\ScopeAutosaveSettings;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Autosave settings for some type of chats were updated.
 */
class UpdateAutosaveSettings extends Update
{
    public const string TYPE_NAME = 'updateAutosaveSettings';

    public function __construct(
        /**
         * Type of chats for which autosave settings were updated.
         */
        protected AutosaveSettingsScope  $scope,
        /**
         * The new autosave settings; may be null if the settings are reset to default.
         */
        protected ?ScopeAutosaveSettings $settings,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateAutosaveSettings
    {
        return new static(
            scope   : TdSchemaRegistry::fromArray($array['scope']),
            settings: (isset($array['settings']) ? TdSchemaRegistry::fromArray($array['settings']) : null),
        );
    }

    public function getScope(): AutosaveSettingsScope
    {
        return $this->scope;
    }

    public function getSettings(): ?ScopeAutosaveSettings
    {
        return $this->settings;
    }

    public function setScope(AutosaveSettingsScope $value): static
    {
        $this->scope = $value;

        return $this;
    }

    public function setSettings(?ScopeAutosaveSettings $value): static
    {
        $this->settings = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'scope'    => $this->scope->jsonSerialize(),
            'settings' => (null !== $this->settings ? $this->settings->jsonSerialize() : null),
        ];
    }
}
