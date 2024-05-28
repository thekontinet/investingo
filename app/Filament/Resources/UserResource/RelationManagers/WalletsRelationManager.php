<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Services\WalletService;
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
                        Forms\Components\Toggle::make('hidden')
                            ->label('Hide this transaction')
                            ->helperText('Hide this transaction from user')
                            ->columnSpanFull()
                            ->required(),
                    ])->action(function ($data, $record) {
                        $transaction = app(WalletService::class)->transact($data['type'], $record, $data['amount']);
                        $transaction->hide($data['hidden']);
                        return $transaction;
                    }),
            ])
            ->bulkActions([]);
    }
}
