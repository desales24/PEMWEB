<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ShowHomePageResource\Pages;
use App\Filament\Admin\Resources\ShowHomePageResource\RelationManagers;
use App\Models\ShowHomePage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShowHomePageResource extends Resource
{
    protected static ?string $model = ShowHomePage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('Profile_image')
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('logo_image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tulisan_1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tulisan_2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('button')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('Profile_image'),
                Tables\Columns\ImageColumn::make('logo_image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tulisan_1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tulisan_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact')
                    ->searchable(),
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
            'index' => Pages\ListShowHomePages::route('/'),
            'create' => Pages\CreateShowHomePage::route('/create'),
            'edit' => Pages\EditShowHomePage::route('/{record}/edit'),
        ];
    }
}
