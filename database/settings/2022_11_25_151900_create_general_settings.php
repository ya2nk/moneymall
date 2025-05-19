<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.name', config('app.name'));
        $this->migrator->add('general.logo', 'logo.png');
        $this->migrator->add('general.favicon', 'favicon.ico');
        $this->migrator->add('general.description', '');
        $this->migrator->add('general.copyright_text', '&copy;2022 all rights reserved.');
        $this->migrator->add('general.meta_keywords', '');
        $this->migrator->add('general.meta_description', '');
        $this->migrator->add('general.meta_author', '');
        $this->migrator->add('general.desktop_app_link', '');
        $this->migrator->add('general.android_app_link', '');
        $this->migrator->add('general.ios_app_link', '');
        $this->migrator->add('general.business_proposal_link', '');
        $this->migrator->add('general.brochure_link', '');
        $this->migrator->add('general.trading_hours_link', '');
    }
}
