<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssetResource\Pages\CreateAsset;
use App\Filament\Resources\PaymentMethodResource\Pages;
use App\Models\Asset;
use App\Models\PaymentMethod;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PaymentMethodResource extends Resource
{
    protected static ?string $model = PaymentMethod::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationGroup = 'Manage';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('asset_id')
                    ->label('Asset')
                    ->options(Asset::where('type', 'crypto')->pluck('name', 'id'))
                    ->hintAction(Action::make('Create New Asset')->url(CreateAsset::getUrl()))
                    ->required(),
                Forms\Components\Repeater::make('data')
                    ->label('Wallet Address')
                    ->simple(
                        Forms\Components\TextInput::make('address')
                            ->required()
                    )
                    ->addable(false)
                    ->deletable(false)
                    ->orderColumn(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('asset.image_url')->label('Logo'),
                Tables\Columns\TextColumn::make('data.0')->label('Addresss')->copyable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListPaymentMethods::route('/'),
            'create' => Pages\CreatePaymentMethod::route('/create'),
            'edit' => Pages\EditPaymentMethod::route('/{record}/edit'),
        ];
    }
}
