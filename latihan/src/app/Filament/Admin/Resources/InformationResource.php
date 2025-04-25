<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\InformationResource\Pages;
use App\Filament\Admin\Resources\InformationResource\RelationManagers;
use App\Models\Information;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformationResource extends Resource
{
    protected static ?string $model = Information::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('birthday')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description_1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description_2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description_3')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description_4')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('logo_1_image')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('logo_2_image')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('logo_3_image')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthday')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description_3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description_4')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo_1_image'),
                Tables\Columns\ImageColumn::make('logo_2_image'),
                Tables\Columns\ImageColumn::make('logo_3_image'),
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
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInformation::route('/'),
            'create' => Pages\CreateInformation::route('/create'),
            'edit' => Pages\EditInformation::route('/{record}/edit'),
        ];
    }
}
