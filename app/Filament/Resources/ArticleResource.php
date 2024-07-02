<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Article Creatore')->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('creator'),
                    Forms\Components\TextInput::make('view'),
                    Forms\Components\Section::make('Article Image')->schema([
                        Forms\Components\FileUpload::make('imgUrl')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                ])->columns(2),
                Forms\Components\Section::make('Article Content')->schema([
                    Forms\Components\RichEditor::make('content')
                        ->required()
                        ->columnSpanFull(),
                ]),
                Forms\Components\Toggle::make('publish')
                    ->required(),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('publish')
                    ->boolean(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('creator'),
                Tables\Columns\ImageColumn::make('imgUrl'),
                Tables\Columns\TextColumn::make('view'),
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
