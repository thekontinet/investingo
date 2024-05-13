<?php

namespace App\Filament\Pages;

use App\Settings\PageSettings;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManagePageInfo extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = PageSettings::class;

    protected static ?string $navigationGroup = 'Settings';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Repeater::make('testimonies')
                    ->schema([
                        FileUpload::make('image'),
                        TextInput::make('title')->required(),
                        TextInput::make('subtitle')->required(),
                        Textarea::make('comment')->required()->maxLength(400),
                    ]),
            ]);
    }
}
