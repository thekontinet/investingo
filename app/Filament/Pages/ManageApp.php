<?php

namespace App\Filament\Pages;

use App\Settings\AppSettings;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageApp extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-puzzle-piece';

    protected static string $settings = AppSettings::class;

    protected static ?string $navigationGroup = 'Settings';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Website')
                    ->schema([
                        FileUpload::make('logo')->avatar(),
                        TextInput::make('headline'),
                        TextInput::make('tagline'),
                        Textarea::make('description'),
                    ]),

                Section::make('Contact Details')
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('email')->email(),
                        TextInput::make('phone')->tel(),
                        TextInput::make('livechat'),
                        Textarea::make('address')
                            ->label('Company Address'),
                    ]),
            ]);
    }
}
