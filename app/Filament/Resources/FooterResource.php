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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('email'),
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
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
