<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BeasiswaResource\Pages;
use App\Models\Beasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BeasiswaResource extends Resource
{
    protected static ?string $model = Beasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Data Beasiswa';
    protected static ?string $modelLabel = 'Beasiswa';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')
                ->label('Nama Beasiswa')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('deskripsi')
                ->label('Deskripsi')
                ->rows(3),

            Forms\Components\DatePicker::make('tanggal_mulai')
                ->label('Tanggal Mulai')
                ->required(),

            Forms\Components\DatePicker::make('tanggal_selesai')
                ->label('Tanggal Selesai')
                ->required()
                ->rule('after:tanggal_mulai'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama')->label('Nama Beasiswa')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('tanggal_mulai')->label('Mulai')->date()->sortable(),
            Tables\Columns\TextColumn::make('tanggal_selesai')->label('Selesai')->date()->sortable(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeasiswas::route('/'),
            'create' => Pages\CreateBeasiswa::route('/create'),
            'edit' => Pages\EditBeasiswa::route('/{record}/edit'),
        ];
    }
}
