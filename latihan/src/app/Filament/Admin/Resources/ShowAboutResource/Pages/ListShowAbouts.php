<?php

namespace App\Filament\Admin\Resources\ShowAboutResource\Pages;

use App\Filament\Admin\Resources\ShowAboutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShowAbouts extends ListRecords
{
    protected static string $resource = ShowAboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
