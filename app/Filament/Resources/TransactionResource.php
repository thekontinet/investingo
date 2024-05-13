<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('confirmed', false)->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'danger';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('amount')
                    ->numeric()
                    ->prefix('$')
                    ->required(),
                Forms\Components\Toggle::make('confirmed')
                    ->columnSpanFull()
                    ->hidden(fn ($record) => !$record?->confirmed)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn ($query) => $query->latest())
            ->columns([
                Tables\Columns\TextColumn::make('description')
                    ->description(fn ($record) => $record->payable->email)
                    ->icon(fn ($record) => $record->type === 'withdraw' ? 'heroicon-o-arrow-up-tray' : 'heroicon-o-arrow-down-tray')
                    ->color(fn ($record) => $record->type === 'withdraw' ? 'success' : 'warning'),
                Tables\Columns\TextColumn::make('amount')
                    ->money('USD')
                    ->sortable(),
                Tables\Columns\IconColumn::make('confirmed')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),

                    Tables\Actions\Action::make('approve')
                        ->requiresConfirmation()
                        ->hidden(fn ($record) => $record->confirmed)
                        ->icon('heroicon-o-check-circle')
                        ->action(fn ($record) => $record->wallet->confirm($record)),

                        Tables\Actions\Action::make('reset')
                            ->requiresConfirmation()
                            ->visible(fn ($record) => $record->confirmed)
                            ->icon('heroicon-o-arrow-path')
                            ->action(fn ($record) => $record->wallet->resetConfirm($record)),
                ]),
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
            'index' => Pages\ListTransactions::route('/'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
