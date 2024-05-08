<?php

namespace App\Filament\Widgets;

use App\Models\Investment;
use App\Models\Transaction;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->whereNot('id', auth()->id())->count())
                ->icon('heroicon-o-users'),

            Stat::make('Transactions', Transaction::query()->count())
                ->icon('heroicon-o-banknotes'),

            Stat::make('Investments', Investment::query()->count())
                ->icon('heroicon-o-currency-dollar'),
        ];
    }
}
