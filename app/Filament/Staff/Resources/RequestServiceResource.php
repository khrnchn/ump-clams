<?php

namespace App\Filament\Staff\Resources;

use App\Filament\Staff\Resources\RequestServiceResource\Pages;
use App\Models\RequestService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RequestServiceResource extends Resource
{
    protected static ?string $model = RequestService::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('request_id')->nullable()->relationship('request', 'name'),
                Forms\Components\Select::make('service_id')->nullable()->relationship('service', 'name'),
                Forms\Components\Textarea::make('method_equipment'),
                Forms\Components\TextInput::make('quantity')->numeric(),
                Forms\Components\TextInput::make('total_price')->numeric(),
                Forms\Components\Toggle::make('is_return_sample'),
                Forms\Components\Toggle::make('is_disposed'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

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
            'index' => Pages\ListRequestServices::route('/'),
            'create' => Pages\CreateRequestService::route('/create'),
            'edit' => Pages\EditRequestService::route('/{record}/edit'),
        ];
    }
}
