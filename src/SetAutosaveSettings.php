<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Sets autosave settings for the given scope. The method is guaranteed to work only after at least one call to getAutosaveSettings
 */
class SetAutosaveSettings extends TdFunction
{
    public const TYPE_NAME = 'setAutosaveSettings';

    /**
     * Autosave settings scope
     *
     * @var AutosaveSettingsScope
     */
    protected AutosaveSettingsScope $scope;

    /**
     * New autosave settings for the scope; pass null to set autosave settings to default
     *
     * @var ScopeAutosaveSettings
     */
    protected ScopeAutosaveSettings $settings;

    public function __construct(AutosaveSettingsScope $scope, ScopeAutosaveSettings $settings)
    {
        $this->scope = $scope;
        $this->settings = $settings;
    }

    public static function fromArray(array $array): SetAutosaveSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            TdSchemaRegistry::fromArray($array['settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'scope' => $this->scope->typeSerialize(),
            'settings' => $this->settings->typeSerialize(),
        ];
    }

    public function getScope(): AutosaveSettingsScope
    {
        return $this->scope;
    }

    public function getSettings(): ScopeAutosaveSettings
    {
        return $this->settings;
    }
}
