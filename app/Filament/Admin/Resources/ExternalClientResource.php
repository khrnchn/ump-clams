<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ExternalClientResource\Pages;
use App\Models\ExternalClient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ExternalClientResource extends Resource
{
    protected static ?string $model = ExternalClient::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')->nullable()->relationship('user', 'name'),
                Forms\Components\TextInput::make('institution'),
                Forms\Components\TextInput::make('position'),
                Forms\Components\TextInput::make('industry'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('institution')->searchable(),
                Tables\Columns\TextColumn::make('position')->searchable(),
                Tables\Columns\TextColumn::make('industry')->searchable(),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExternalClients::route('/'),
            'create' => Pages\CreateExternalClient::route('/create'),
            'edit' => Pages\EditExternalClient::route('/{record}/edit'),
        ];
    }
}
