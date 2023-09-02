<?php

namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\RequestResource\Pages;
use App\Models\Request;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RequestResource extends Resource
{
    protected static ?string $model = Request::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')->nullable()->relationship('user', 'name'),
                Forms\Components\TextInput::make('uct_no'),
                Forms\Components\TextInput::make('sample_lab_no'),
                Forms\Components\TextInput::make('total_price')->numeric(),
                Forms\Components\Select::make('formable_id')->nullable()->options([]),
                Forms\Components\TextInput::make('formable_type'),
                Forms\Components\Select::make('application_status')->options([]),
                Forms\Components\Select::make('staff_id')->nullable()->relationship('staff', 'name'),
                Forms\Components\DateTimePicker::make('approved_at')->time(false),
                Forms\Components\Select::make('sample_id')->nullable()->relationship('sample', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('uct_no')->searchable(),
                Tables\Columns\TextColumn::make('sample_lab_no')->searchable(),
                Tables\Columns\TextColumn::make('formable_type')->searchable(),

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
            'index' => Pages\ListRequests::route('/'),
            'create' => Pages\CreateRequest::route('/create'),
            'edit' => Pages\EditRequest::route('/{record}/edit'),
        ];
    }
}
