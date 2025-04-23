<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ShowAboutResource\Pages;
use App\Filament\Admin\Resources\ShowAboutResource\RelationManagers;
use App\Models\ShowAbout;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShowAboutResource extends Resource
{
    protected static ?string $model = ShowAbout::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('point')
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
                Forms\Components\FileUpload::make('logo_image')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('profile_image')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('point')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description_3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description_4')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo_image'),
                Tables\Columns\ImageColumn::make('profile_image'),
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
            'index' => Pages\ListShowAbouts::route('/'),
            'create' => Pages\CreateShowAbout::route('/create'),
            'edit' => Pages\EditShowAbout::route('/{record}/edit'),
        ];
    }
}
