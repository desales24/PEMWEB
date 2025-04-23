<?php

namespace App\Filament\Admin\Resources\ShowAboutResource\Pages;

use App\Filament\Admin\Resources\ShowAboutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShowAbout extends EditRecord
{
    protected static string $resource = ShowAboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
