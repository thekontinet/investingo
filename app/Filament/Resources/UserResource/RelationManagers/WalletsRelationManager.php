<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class WalletsRelationManager extends RelationManager
{
    protected static string $relationship = 'wallets';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('balance')->money('USD'),
            ])
            ->filters([
            ])
            ->headerActions([
            ])
            ->actions([
                Tables\Actions\Action::make('Fund Account')
                    ->icon('heroicon-o-wallet')
                    ->button()
                    ->form([
                        Forms\Components\Select::make('type')
                            ->options(['deposit' => 'Deposit', 'withdraw' => 'Withdraw'])
                            ->required(),
                        Forms\Components\TextInput::make('amount')
                            ->numeric()
                            ->prefix('$')
                            ->required(),
                    ])->action(function ($data, $record) {
                        if ($data['type'] === 'deposit') {
                            return $record->deposit($data['amount']);
                        }

                        return $record->withdraw($data['amount']);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                ]),
            ]);
    }
}
