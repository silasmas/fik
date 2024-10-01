<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Activite;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\ActiviteResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ActiviteResource\RelationManagers;
use App\Filament\Resources\ActiviteResource\Pages\EditActivite;
use App\Filament\Resources\ActiviteResource\Pages\ListActivites;
use App\Filament\Resources\ActiviteResource\Pages\CreateActivite;

class ActiviteResource extends Resource
{
    protected static ?string $model = Activite::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make(name: 'titre')
                    ->required()
                    ->maxLength(255),
                TextInput::make('sujet')
                    ->required()
                    ->label(label: 'Sujet de l\'activité')
                    ->maxLength(255),
                FileUpload::make('cover')
                    ->label('Image de couverture (370 X 240)')
                    ->columnSpanFull()
                    ->directory('cover')
                    ->imageEditor()
                    ->imageEditorMode(2)
                    ->downloadable()
                    ->image()
                    ->maxSize(1024)
                    ->required()
                    ->previewable(true)
                    ->image(),
                TextInput::make(name: 'participant')
                    ->label(label: 'Nombre de personne qui ont participée')
                    ->maxLength(255),
                DateTimePicker::make('date')->label("Date et heure de l'activité")
                    ->required(),
                MarkdownEditor::make('description')
                    ->fileAttachmentsDirectory('products')
                    ->columnSpanFull(),
                Select::make('categorie_id')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('categorie', 'nom'),
                Select::make('status')
                    ->options([
                        'en attente' => 'En attente',
                        'en cours' => 'En cours',
                        'passer' => 'Passer',
                    ])
                    ->label("Status de l'activité")
                    ->searchable()->required(),
                Toggle::make('is_active')
                    ->label('Active (pour le rendre visible ou pas)')
                    ->required(),
                FileUpload::make('images')
                    ->label('Les images de l\'avtivité (370 X 240)')
                    ->columnSpanFull()
                    ->directory('imageEvents')
                    ->imageEditor()
                    ->imageEditorMode(2)
                    ->downloadable()
                    ->image()
                    ->multiple()
                    ->maxSize(3024)
                    ->required()
                    ->previewable(true)
                    ->image(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover'),
                TextColumn::make('titre')
                    ->searchable(),
                TextColumn::make('sujet')
                    ->searchable(),
                TextColumn::make('participant')
                    ->searchable(),
                TextColumn::make('date')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge()
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
            ->filters([])
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
            'index' => Pages\ListActivites::route('/'),
            'create' => Pages\CreateActivite::route('/create'),
            'edit' => Pages\EditActivite::route('/{record}/edit'),
        ];
    }
}
