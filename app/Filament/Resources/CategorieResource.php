<?php

namespace App\Filament\Resources;

use Filament\Forms\Form;
use App\Models\categorie;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\CategorieResource\Pages;

class CategorieResource extends Resource
{
    protected static ?string $model = categorie::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                    ->maxLength(255),
                TextInput::make('titre')
                    ->label('Titre (pour le slide)')
                    ->maxLength(255),
                Textarea::make('resume')
                    ->label('Résumer (pour le slide)')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->label('Description (Longue description)')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Image de couverture (1920 X 746)')
                    ->columnSpanFull()
                    ->directory('categories')
                    ->imageEditor()
                    ->imageEditorMode(2)
                    ->downloadable()
                    ->image()
                    ->maxSize(1024)
                    ->previewable(true)
                    ->image(),
                Toggle::make('is_active')
                    ->label('Active (pour le rendre visible ou pas)')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('nom')
                    ->searchable(),
                TextColumn::make('titre')
                    ->searchable(),
                TextColumn::make('description')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => Pages\ListCategories::route('/'),
            // 'create' => Pages\CreateCategorie::route('/create'),
            // 'edit' => Pages\EditCategorie::route('/{record}/edit'),
        ];
    }
}
