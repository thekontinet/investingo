<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RecentUsers extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                User::query()->latest()->limit(4)->whereNot('id', auth()->id())
            )
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
            ])->actions([
                Action::make('Edit')->url(fn ($record) => UserResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
