<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisaResource\Pages;
use App\Filament\Resources\VisaResource\RelationManagers;
use App\Models\Visa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisaResource extends Resource
{
    protected static ?string $model = Visa::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('visa_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('visa_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('visa_expiry_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('visa_price')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('publish_status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('visa_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('visa_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('visa_expiry_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('visa_price')
                    ->searchable(),
                Tables\Columns\IconColumn::make('publish_status')
                    ->boolean(),
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListVisas::route('/'),
            'create' => Pages\CreateVisa::route('/create'),
            'edit' => Pages\EditVisa::route('/{record}/edit'),
        ];
    }
}
