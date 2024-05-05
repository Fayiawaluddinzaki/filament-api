<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SmallbannerResource\Pages;
use App\Filament\Resources\SmallbannerResource\RelationManagers;
use App\Models\Smallbanner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SmallbannerResource extends Resource
{
    protected static ?string $model = Smallbanner::class;

    protected static ?string $navigationLabel = 'Small Banner';

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('small_banners_image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('small_banners_url')
                    ->maxLength(255),
                Forms\Components\TextInput::make('small_banners_sequence')
                    ->required()
                    ->numeric(),
                Forms\Components\Toggle::make('small_banners_status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('small_banners_image'),
                Tables\Columns\TextColumn::make('small_banners_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('small_banners_sequence')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('small_banners_status')
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
            'index' => Pages\ListSmallbanners::route('/'),
            'create' => Pages\CreateSmallbanner::route('/create'),
            'edit' => Pages\EditSmallbanner::route('/{record}/edit'),
        ];
    }
}
