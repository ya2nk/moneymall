<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $name;

    public ?string $logo;

    public ?string $favicon;

    public ?string $description;

    public ?string $copyright_text;

    public ?string $meta_keywords;

    public ?string $meta_description;

    public ?string $meta_author;

    public ?string $desktop_app_link;

    public ?string $android_app_link;

    public ?string $ios_app_link;

    public ?string $business_proposal_link;

    public ?string $brochure_link;

    public ?string $trading_hours_link;

    public static function group(): string
    {
        return 'general';
    }
}
