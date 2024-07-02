<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResumeResource\Pages;
use App\Filament\Resources\ResumeResource\RelationManagers;
use App\Models\Resume;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
class ResumeResource extends Resource
{
    protected static ?string $model = Resume::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Type of Resume')->description("select type of the Resume you want to add")
                ->schema([
                    Forms\Components\Select::make('type')
                    ->options([
                        'experience' => 'experience',
                        'education' => 'education',
                    ])->native(false)
                    ->required(),
                ]),
                Forms\Components\Section::make('Resume Basic data')->description("baseic information of your resume")->schema([
                    Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)->columnSpanFull(),
                    Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\TextInput::make('company')
                    ->required(),
                    Forms\Components\TextInput::make('grade'),
                    Forms\Components\Section::make("Date")->schema([
                        Forms\Components\DatePicker::make('startDate')
                        ->required(),
                        Forms\Components\DatePicker::make('endDate')
                        ->required(),
                    ])->columns(2)
                ])->columns(3),
                Forms\Components\Section::make("Resume Body")->description('Add you resume body here')->schema([
                    Forms\Components\RichEditor::make('body')
                        ->required()
                        ->columnSpanFull(),
                ]),
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company')
                    ->searchable(),
                Tables\Columns\TextColumn::make('body')
                    ->searchable(),
                Tables\Columns\TextColumn::make('grade')
                    ->searchable(),
                Tables\Columns\TextColumn::make('startDate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('endDate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type'),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListResumes::route('/'),
            'create' => Pages\CreateResume::route('/create'),
            'edit' => Pages\EditResume::route('/{record}/edit'),
        ];
    }
}
