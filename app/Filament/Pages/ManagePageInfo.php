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
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static string $settings = PageSettings::class;

    protected static ?string $navigationGroup = 'Settings';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Repeater::make('testimonies')
                    ->schema([
                        FileUpload::make('image')->columnSpanFull(),
                        TextInput::make('title')->required(),
                        TextInput::make('subtitle')->required(),
                        Textarea::make('comment')->required()->maxLength(500)->columnSpanFull(),
                    ])->columns(2)->grid(3),
            ])->columns(1);
    }
}
