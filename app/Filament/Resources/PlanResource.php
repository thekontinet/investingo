<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanResource\Pages;
use App\Models\Plan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PlanResource extends Resource
{
    protected static ?string $model = Plan::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'Manage';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Ex. Starter')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('min_deposit')
                    ->label('Mininum Deposit')
                    ->required()
                    ->prefix('$')
                    ->placeholder('Ex. 100')
                    ->numeric(),
                Forms\Components\TextInput::make('max_deposit')
                    ->label('Maximum Deposit')
                    ->required()
                    ->prefix('$')
                    ->placeholder('Ex. 400')
                    ->numeric(),
                Forms\Components\TextInput::make('terms_days')
                    ->label('Duration')
                    ->suffix('days')
                    ->placeholder('Ex. 20')
                    ->helperText('This field defines how long the investment will last')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('daily_interest')
                    ->required()
                    ->numeric()
                    ->suffix('%')
                    ->placeholder('Ex. 0.7'),
                Forms\Components\Textarea::make('description')
                    ->placeholder('Ex. Enjoy entry level investment')
                    ->maxLength(2000)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('min_deposit')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('max_deposit')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('terms_days')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('daily_interest')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListPlans::route('/'),
            'create' => Pages\CreatePlan::route('/create'),
            'edit' => Pages\EditPlan::route('/{record}/edit'),
        ];
    }
}
