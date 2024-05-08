<?php

namespace App\Filament\Resources;

use App\Enums\AssetType;
use App\Filament\Resources\AssetResource\Pages;
use App\Models\Asset;
use App\Services\CoinMarketCap;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AssetResource extends Resource
{
    protected static ?string $model = Asset::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';

    protected static ?string $navigationGroup = 'Manage';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(3)
            ->schema(static::getForm());
    }

    public static function getForm()
    {
        return [
            Forms\Components\Hidden::make('type')
                ->required()
                ->default(AssetType::Crypto),
            Forms\Components\TextInput::make('symbol')
                ->required()
                ->maxLength(20)
                ->placeholder('USDT')
                ->suffixAction(
                    Action::make('Search')
                        ->icon('heroicon-o-magnifying-glass')
                        ->action(function ($get, $set) {
                            $symbol = strtoupper($get('symbol'));

                            $data = (new CoinMarketCap())->basic($symbol);

                            if (!$data) {
                                Notification::make('error')
                                    ->title('Asset Not Available')
                                    ->body('This asset cannot be found or could not be fetched from the provider')
                                    ->danger()
                                    ->send();

                                return;
                            }

                            $set('symbol', $data['symbol']);
                            $set('name', $data['name']);
                            $set('price', $data['price']);
                        })
                ),
            Forms\Components\TextInput::make('name')
                ->readOnly()
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('price')
                ->readOnly()
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('description')
                ->visibleOn('edit')
                ->required()
                ->columnSpanFull(),
            ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_url'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('symbol')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssets::route('/'),
            'create' => Pages\CreateAsset::route('/create'),
            'edit' => Pages\EditAsset::route('/{record}/edit'),
        ];
    }
}
