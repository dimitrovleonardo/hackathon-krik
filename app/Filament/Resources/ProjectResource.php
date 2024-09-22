<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Наслов')->columnSpan('full')->required(),
                RichEditor::make('description')->label('Содржина на Проектот')->columnSpan('full')->required(),
                Textarea::make('project_goal')->label('Цел на Проектот?')->columnSpan('full')->required(),
                Textarea::make('for_whom')->label('За кого е наменет овај проект?')->columnSpan('full')->required(),
                DatePicker::make('starting_at')->label('Започнува на')->required(),
                DatePicker::make('ending_at')->label('Завршува на')->nullable(),
                Forms\Components\Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->required()
//                    ->multiple()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                        ->required()
                            ->label('Category Name'),
                    ])
                    ->createOptionUsing(function ($data) {

                        return \App\Models\Category::create(['name' => $data['name']])->id;
                    })
                    ->options(function () {
                        return \App\Models\Category::all()->pluck('name', 'id');
                    }),
                SpatieMediaLibraryFileUpload::make('images')
                    ->collection('project_images')
                    ->multiple()
                    ->columnSpan('full')
                    ->image()
                    ->maxFiles(5)
                    ->maxSize(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                ImageColumn::make('media')
                    ->label('Image')
                    ->getStateUsing(function ($record) {
                        return $record->getFirstMediaUrl('project_images');
                    })

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
