<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(3)->schema([
                    Forms\Components\TextInput::make('title')
                        ->afterStateUpdated(function (Forms\Get $get, Forms\Set $set, ?string $state) {
                            if (!$get('is_slug_changed_manually') && filled($state)) {
                                $set('slug', Str::slug($state));
                            }
                        })
                        ->reactive()
                        ->required(),
                    Forms\Components\TextInput::make('slug')
                        ->afterStateUpdated(function (Forms\Set $set) {
                            $set('is_slug_changed_manually', true);
                        })
                        ->required(),
                    Forms\Components\DateTimePicker::make('published_at')
                        ->default(now()),
                    Forms\Components\Hidden::make('is_slug_changed_manually')
                        ->default(false)
                        ->dehydrated(false)
                ]),
                Forms\Components\Grid::make(1)->schema([
                    Forms\Components\TextInput::make('summary')
                        ->required()
                ]),
                Forms\Components\Grid::make(1)->schema([
                    Forms\Components\MarkdownEditor::make('content')
                        ->fileAttachmentsVisibility('private')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('summary')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('published_at')
                    ->sortable()
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
