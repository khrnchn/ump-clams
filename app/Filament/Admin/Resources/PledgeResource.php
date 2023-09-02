<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PledgeResource\Pages;
use App\Models\Pledge;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PledgeResource extends Resource
{
    protected static ?string $model = Pledge::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vot_no'),
                Forms\Components\TextInput::make('sample_no'),
                Forms\Components\Select::make('payment_method')->options([]),
                Forms\Components\Textarea::make('description'),
                Forms\Components\Textarea::make('payment_proof_path'),
                Forms\Components\DatePicker::make('start_date'),
                Forms\Components\DatePicker::make('end_date'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vot_no')->searchable(),
                Tables\Columns\TextColumn::make('sample_no')->searchable(),

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
            'index' => Pages\ListPledges::route('/'),
            'create' => Pages\CreatePledge::route('/create'),
            'edit' => Pages\EditPledge::route('/{record}/edit'),
        ];
    }
}
