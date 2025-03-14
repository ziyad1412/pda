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
use Filament\Forms\Components\ColorPicker;



class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Produk';

    protected static ?string $navigationLabel = 'Produk';

    protected static ?string $navigationGroup = 'Kelola Produk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Produk')
                    ->required()
                    ->debounce(500)
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->label('Gambar Utama')
                    ->image()
                    ->columnSpan(2)
                    ->directory('products')
                    ->required(),
                Forms\Components\Select::make('category_id')
                    ->label('Kategori Produk')
                    ->relationship('category', 'name')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('Harga Produk')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),
                Forms\Components\Repeater::make('color')
                    ->schema([
                        Forms\Components\ColorPicker::make('value')->label('Warna')
                            ->nullable(),
                    ])
                    ->label('Warna Opsional')
                    ->addActionLabel('Tambah Warna'),
                Forms\Components\Repeater::make('size')
                    ->schema([
                        Forms\Components\TextInput::make('value')->label('Ukuran')
                            ->nullable(),
                    ])
                    ->label('Ukuran Opsional')
                    ->addActionLabel('Tambah Ukuran'),
                Forms\Components\TextInput::make('stock')
                    ->label('Stok Produk')
                    ->numeric()
                    ->required(),
                Forms\Components\RichEditor::make('description')
                    ->label('Deskripsi Produk')
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\FileUpload::make('certificate')
                    ->label('Sertifikat Produk')
                    ->columnSpan(2)
                    ->directory('certificates')
                    ->required(),
                Forms\Components\Repeater::make('images')
                    ->label('Gambar Produk')
                    ->relationship('images')
                    ->columnSpan(2)
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Gambar')
                            ->image()
                            ->directory('products')
                            ->required(),
                    ])
                    ->addActionLabel('Tambah Gambar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori'),
                Tables\Columns\TextColumn::make('price')
                    ->label('Harga')
                    ->formatStateUsing(fn($state) => number_format($state, 0, ',', '.'))
                    ->prefix('Rp '),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Gambar'),
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
