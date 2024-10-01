<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\team;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
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
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\TeamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeamResource\Pages\EditTeam;
use App\Filament\Resources\TeamResource\Pages\ListTeams;
use App\Filament\Resources\TeamResource\Pages\CreateTeam;
use App\Filament\Resources\TeamResource\RelationManagers;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make('Informations générale')->schema([
                        TextInput::make('nom')
                            ->label("Nom")
                            ->required()
                            ->columnSpan(4)
                            ->maxLength(255),
                        TextInput::make('postnom')
                            ->label("Postnom")
                            ->required()
                            ->columnSpan(4)
                            ->maxLength(255),
                        TextInput::make('prenom')
                            ->label("Prénom")
                            ->required()
                            ->columnSpan(4)
                            ->maxLength(255),
                        TextInput::make(name: 'phone')
                            ->label("Téléphone")
                            ->required()
                            ->columnSpan(4)
                            ->unique(team::class, 'phone', ignoreRecord: true)
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label(label: "Email")
                            ->email()
                            ->columnSpan(4)
                            ->required()
                            ->unique(team::class, 'email', ignoreRecord: true)
                            ->maxLength(255),
                        TextInput::make('role')
                            ->label("Role")
                            ->required()
                            ->columnSpan(4)
                            ->maxLength(255)
                            ->default('admin'),
                        Toggle::make('is_active')
                            ->columnSpan(6)
                            ->required(),

                    ]),
                ])->columnSpan(4),
                Group::make([
                    Section::make('Profile')->schema([
                        FileUpload::make('profil')
                            ->label('Photo de profile (270 X 400)')
                            ->directory('profil')
                            ->avatar()
                            ->imageEditor()
                            ->imageEditorMode(2)
                            ->circleCropper()
                            ->downloadable()
                            ->image()
                            ->maxSize(1024)
                            ->columnSpan(6)
                            ->previewable(true),
                    ])
                ])->columnSpan(2),
            ])->columns(6);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profil')
                    ->circular()
                    ->searchable(),
                TextColumn::make('nom')
                    ->searchable(),
                TextColumn::make('postnom')
                    ->searchable(),
                TextColumn::make('prenom')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('phone')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('role')
                    ->searchable(),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
