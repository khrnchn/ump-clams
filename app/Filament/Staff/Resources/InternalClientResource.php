<?php

namespace App\Filament\Staff\Resources;

use App\Filament\Staff\Resources\InternalClientResource\Pages;
use App\Models\InternalClient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class InternalClientResource extends Resource
{
    protected static ?string $model = InternalClient::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')->nullable()->relationship('user', 'name'),
                Forms\Components\TextInput::make('institution')->label('Institution'),
                Forms\Components\TextInput::make('student_id'),
                Forms\Components\TextInput::make('faculty'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('institution')->searchable(),
                Tables\Columns\TextColumn::make('student_id')->searchable(),
                Tables\Columns\TextColumn::make('faculty')->searchable(),
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
            'index' => Pages\ListInternalClients::route('/'),
            'create' => Pages\CreateInternalClient::route('/create'),
            'edit' => Pages\EditInternalClient::route('/{record}/edit'),
        ];
    }
}
