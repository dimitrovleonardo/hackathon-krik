<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->label('Слика')
                    ->image()
                    ->columnSpan('full')
                    ->disk('public_images')
                    ->directory('images/ourTeam')
                    ->required(),

                TextInput::make('name')
                    ->label('Име и Презиме')
                    ->required(),

                TextInput::make('role')
                    ->label('Позиција')
                    ->required(),

                TextInput::make('linkedin')
                    ->label('LinkedIn')
                    ->columnSpan('full')
                    ->url(),
                Forms\Components\Textarea::make('about')
                    ->label('За')
                    ->columnSpan('full')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Слика')
                    ->getStateUsing(fn($record) => asset($record->image))
                    ->width(50)
                    ->rounded()
                    ->height(50),
                Tables\Columns\TextColumn::make('name')->label('Име'),
                Tables\Columns\TextColumn::make('role')->label('Позиција'),
                Tables\Columns\TextColumn::make('linkedin')->label('LinkedIn'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
