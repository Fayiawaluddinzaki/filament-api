<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ToursResource\Pages;
use App\Filament\Resources\ToursResource\RelationManagers;
use App\Models\Tours;
use App\Models\Destinations;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichTextarea;

class ToursResource extends Resource
{
    protected static ?string $model = Tours::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tour_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('tour_type')
                    ->label('Tour Type')
                    ->options([
                        'private',
                        'series',
                        'family'
                    ])
                    ->required(),
                    // ->maxLength(255),
                // Forms\Components\TextInput::make('tour_type')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('destination_id')
                //     ->required()
                //     ->numeric(),
                Forms\Components\Select::make('destination_id')
                    ->label('Destination')
                    ->options(Destinations::all()->pluck('destination_name', 'id'))
                    ->searchable(),
                Forms\Components\TextInput::make('tour_price')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tour_duration')
                    ->required()
                    ->maxLength(255),

                // Forms\Components\TextInput::make('tour_description')
                //     ->required()
                //     ->maxLength(255),


                RichEditor::make('tour_description')
                    ->label('Tour Description')
                    ->required(),


                Forms\Components\FileUpload::make('tour_itinerary')
                    ->label('Upload Itinerary')
                    ->acceptedFileTypes(['application/pdf'])
                    ->downloadable()
                    ->required(),

                // Forms\Components\TextInput::make('tour_itinerary')
                //     ->required()
                //     ->maxLength(255),
                Forms\Components\FileUpload::make('tour_image')
                    ->image()
                    ->acceptedFileTypes(['jpg', 'png', 'jpeg'])
                    ->downloadable()
                    // ->maxSize(1024)
                    ->required(),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tour_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tour_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('destination_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tour_price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tour_duration')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tour_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tour_itinerary')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('tour_image'),
                Tables\Columns\IconColumn::make('status')
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
            'index' => Pages\ListTours::route('/'),
            'create' => Pages\CreateTours::route('/create'),
            'edit' => Pages\EditTours::route('/{record}/edit'),
        ];
    }
}
