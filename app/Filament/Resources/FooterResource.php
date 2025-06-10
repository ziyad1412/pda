<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterResource\Pages;
use App\Filament\Resources\FooterResource\RelationManagers;
use App\Models\Footer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static ?string $label = 'Footer (Alamat & Kontak)';

    protected static ?string $navigationIcon = 'heroicon-o-map';

    protected static ?string $navigationLabel = 'Footer (Alamat & Kontak)';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('address')
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->numeric()
                    ->prefix('+')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->required(),
                Forms\Components\TextInput::make('instagram')
                    ->nullable(),
                Forms\Components\TextInput::make('facebook')
                    ->nullable(),
                Forms\Components\Repeater::make('important_links')
                    ->label('Tautan Penting')
                    ->columnSpan(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul Tautan')
                            ->required(),
                        Forms\Components\TextInput::make('url')
                            ->label('URL Tautan')
                            ->url()
                            ->required(),
                    ])
                    ->addActionLabel('Tambah Tautan'),
                Forms\Components\Repeater::make('services')
                    ->label('Layanan')
                    ->columnSpan(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul Layanan')
                            ->required(),
                        Forms\Components\TextInput::make('url')
                            ->label('URL Layanan')
                            ->url()
                            ->required(),
                    ])
                    ->addActionLabel('Tambah Layanan'),
                Forms\Components\Repeater::make('partners')
                    ->label('Mitra')
                    ->columnSpan(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Mitra')
                            ->required(),
                        Forms\Components\TextInput::make('url')
                            ->label('URL Mitra')
                            ->url()
                            ->required(),
                    ])
                    ->addActionLabel('Tambah Mitra'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('phone')
                    ->label('Nomor WA'),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email'),
                Tables\Columns\TextColumn::make('address')
                    ->label('Alamat'),
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
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
