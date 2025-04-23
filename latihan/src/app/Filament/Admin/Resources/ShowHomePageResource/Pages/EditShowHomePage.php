<?php

namespace App\Filament\Admin\Resources\ShowHomePageResource\Pages;

use App\Filament\Admin\Resources\ShowHomePageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShowHomePage extends EditRecord
{
    protected static string $resource = ShowHomePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
