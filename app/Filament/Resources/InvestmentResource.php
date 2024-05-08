<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvestmentResource\Pages;
use App\Models\Investment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class InvestmentResource extends Resource
{
    protected static ?string $model = Investment::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('approved_at', null)->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'danger';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->native(false)
                    ->searchable()
                    ->preload()
                    ->required()
                    ->disabledOn('edit'),
                Forms\Components\Select::make('plan_id')
                    ->relationship('plan', 'name')
                    ->live()
                    ->afterStateUpdated(function ($set, $state) {
                        $set('daily_profit_rate', \App\Models\Plan::find($state)->daily_interest);
                        $set('duration_in_days', \App\Models\Plan::find($state)->terms_days);
                    })
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('profit')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->minValue(0)
                    ->maxValue(fn ($record) => max(0, $record->total_return))
                    ->helperText(fn ($record) => 'Profit must not be greater than '.money($record->total_return))
                    ->visible(fn ($record) => (bool) $record?->approved()),
                Forms\Components\TextInput::make('daily_profit_rate')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('duration_in_days')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('auto')
                    ->label('Turn On Automatic Profit')
                    ->visible(fn ($record) => (bool) $record?->approved())
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Toggle::make('paused')
                    ->visible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn ($query) => $query->latest())
            ->columns([
                Tables\Columns\TextColumn::make('user.email')
                    ->description(fn ($record) => 'Invest '.money($record->amount)." on {$record->plan->name} for {$record->duration_in_days} days")
                    ->suffix(fn ($record) => $record->closed() ? ' (closed)' : null)
                    ->icon(fn ($record) => $record->approved() ? 'heroicon-o-check-circle' : 'heroicon-o-ellipsis-horizontal-circle')
                    ->iconColor(fn ($record) => $record->approved() ? 'success' : 'warning'),
                Tables\Columns\TextColumn::make('profit')
                    ->numeric()
                    ->money('USD')
                    ->description(fn ($record) => 'Created '.$record->created_at->diffForHumans()),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->date()
                    ->description(fn ($record) => $record?->approved_at ? 'Started '.$record?->approved_at?->diffForHumans() : '')
                    ->sortable(),
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                        Tables\Actions\EditAction::make(),

                        Tables\Actions\Action::make('close')
                            ->visible(fn (Investment $record) => $record->approved() && !$record->closed())
                            ->requiresConfirmation()
                            ->modalDescription('Please not that this investment will be closed and ready for withdrawal')
                            ->icon('heroicon-o-stop')
                            ->action(fn ($record) => $record?->close()),

                        Tables\Actions\Action::make('approve')
                            ->requiresConfirmation()
                            ->hidden(fn ($record) => $record->approved())
                            ->modalDescription('Approving this investment will automatically activate it. Are you sure of this ?')
                            ->icon('heroicon-o-check')
                            ->color('success')
                            ->action(fn ($record) => $record->approve()),

                        Tables\Actions\Action::make('reset')
                            ->requiresConfirmation()
                            ->visible(fn ($record) => $record->approved())
                            ->modalDescription('Please not that this will reset the profit and other related data. Are you sure of this action ?')
                            ->icon('heroicon-o-arrow-path')
                            ->color('danger')
                            ->action(fn ($record) => $record->reset()),

                        Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListInvestments::route('/'),
            'create' => Pages\CreateInvestment::route('/create'),
            'edit' => Pages\EditInvestment::route('/{record}/edit'),
        ];
    }
}
