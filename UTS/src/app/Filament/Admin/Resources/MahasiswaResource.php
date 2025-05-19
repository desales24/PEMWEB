<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MahasiswaResource\Pages;
use App\Models\Mahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Data Mahasiswa';
    protected static ?string $modelLabel = 'Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')
                ->label('Nama')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('nim')
                ->label('NIM')
                ->required()
                ->maxLength(50)
                ->unique(Mahasiswa::class, 'nim', ignoreRecord: true),

            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->unique(Mahasiswa::class, 'email', ignoreRecord: true),

            Forms\Components\TextInput::make('ipk')
                ->label('IPK')
                ->numeric()
                ->required()
                ->minValue(0)
                ->maxValue(4)
                ->step(0.01),

            Forms\Components\TextInput::make('semester')
                ->label('Semester')
                ->numeric()
                ->required()
                ->minValue(1),

            Forms\Components\TextInput::make('penghasilan_orangtua')
                ->label('Penghasilan Orangtua')
                ->numeric()
                ->required()
                ->minValue(0),

            Forms\Components\TextInput::make('jurusan')
                ->label('Jurusan')
                ->required()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama')->label('Nama')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('nim')->label('NIM')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('email')->label('Email')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('ipk')->label('IPK')->sortable(),
            Tables\Columns\TextColumn::make('semester')->label('Semester')->sortable(),
            Tables\Columns\TextColumn::make('penghasilan_orangtua')->label('Penghasilan Orangtua')->sortable(),
            Tables\Columns\TextColumn::make('jurusan')->label('Jurusan')->sortable()->searchable(),
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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
