<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisaResource\Pages;
use App\Filament\Resources\VisaResource\Api\Transformers\VisaTransformer;
use App\Filament\Resources\VisaResource\RelationManagers;
use App\Models\Visa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichTextarea;

class VisaResource extends Resource
{
    protected static ?string $model = Visa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('visa_name')
                    ->required()
                    ->maxLength(50),

                Forms\Components\TextInput::make('visa_type')
                    ->label('Visa Type') // Visa Type multiple or single entry
                    ->placeholder('Single Entry or Multiple ... dst')
                    ->required()
                    ->maxLength(50),

                // Forms\Components\Select::make('visa_type')
                //     ->label('Visa Type')
                //     ->options(['Multiple','Single','One Way','E-Visa'])
                //     ->required(),
                    // ->maxLength(50),

                Forms\Components\TextInput::make('visa_expiry_date')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('visa_price')
                    ->label('Harga Visa')
                    // ->suffix('IDR')
                    ->prefix('Rp')
                    ->required()
                    ->maxLength(50),
                Forms\Components\RichEditor::make('visa_description')
                    ->required()
                    ->columnSpanFull(),
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
                    ->money('idr')
                    ->searchable(),
                Tables\Columns\IconColumn::make('publish_status')
                    ->label('Publish Status')
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

    public static function getApiTransformer()
    {
        return VisaTransformer::class;
    }
}
