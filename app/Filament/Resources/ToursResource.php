<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ToursResource\Pages;
use App\Filament\Resources\ToursResource\RelationManagers;
use App\Models\Tours;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
// use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ToursResource extends Resource
{
    protected static ?string $model = Tours::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tour_name')
                    ->name('Tour Name (judul tour)')
                    ->required()
                    ->maxLength(255),


                Forms\Components\Select::make('tour_type')
                    ->options([
                        'private' => 'Private',
                        'series' => 'Series',
                        'manymore' => 'Manymore',
                    ])
                    ->name('Tour Type') // private series or manymore
                    ->required(),
                    // ->maxLength(255),


                // Forms\Components\TextInput::make('tour_type')
                //     ->name('Tour Type') // private series or manymore
                //     ->required()
                //     ->maxLength(255),
                Forms\Components\TextInput::make('destination_id')
                    ->name('Destination')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tour_price')
                    ->name('Tour Price')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tour_duration')
                    ->name('Tour Duration')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('tour_description')
                    ->name('Tour Description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('tour_itinerary')
                    ->name('Tour Itinerary')
                    ->acceptedFileTypes(['application/pdf'])
                    ->multiple()
                    ->required(),
                    // ->maxLength(255),
                // Forms\Components\RichEditor::make('tour_itinerary')
                //     ->required()
                //     ->maxLength(255),
                Forms\Components\FileUpload::make('tour_image')
                    ->name('Tour Image Banner')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])
                    ->image()
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
