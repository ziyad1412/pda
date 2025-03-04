<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->debounce(500)
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->columnSpan(2)
                    ->directory('products')
                    ->required(),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),
                Forms\Components\TextInput::make('color')
                    ->nullable(),
                Forms\Components\TextInput::make('size')
                    ->nullable(),
                Forms\Components\TextInput::make('stock')
                    ->numeric()
                    ->required(),
                Forms\Components\RichEditor::make('description')
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\FileUpload::make('certificate')
                    ->columnSpan(2)
                    ->directory('certificates')
                    ->required(),
                Forms\Components\Repeater::make('images')
                    ->relationship('images')
                    ->columnSpan(2)
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('products')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('price')
                    ->formatStateUsing(fn($state) => number_format($state, 0, ',', '.'))
                    ->prefix('Rp '),
                Tables\Columns\ImageColumn::make('thumbnail'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
