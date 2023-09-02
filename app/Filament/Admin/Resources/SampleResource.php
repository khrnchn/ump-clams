<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SampleResource\Pages;
use App\Models\Sample;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SampleResource extends Resource
{
    protected static ?string $model = Sample::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('request_id')->nullable()->relationship('request', 'name'),
                Forms\Components\TextInput::make('sample_no'),
                Forms\Components\TextInput::make('sample_marking'),
                Forms\Components\Textarea::make('sample_description'),
                Forms\Components\TextInput::make('no_of_samples')->numeric(),
                Forms\Components\Select::make('sample_condition')->options([]),
                Forms\Components\TextInput::make('action'),
                Forms\Components\Textarea::make('remarks'),
                Forms\Components\TextInput::make('delete_later'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sample_no')->searchable(),
                Tables\Columns\TextColumn::make('sample_marking')->searchable(),
                Tables\Columns\TextColumn::make('action')->searchable(),
                Tables\Columns\TextColumn::make('delete_later')->searchable(),
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
            'index' => Pages\ListSamples::route('/'),
            'create' => Pages\CreateSample::route('/create'),
            'edit' => Pages\EditSample::route('/{record}/edit'),
        ];
    }
}
