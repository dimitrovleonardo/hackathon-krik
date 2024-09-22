<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsletterResource\Pages;
use App\Jobs\SendNewsletterEmail;
use App\Mail\SendNotification;
use App\Models\Newsletter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Mail;
use Filament\Notifications\Notification;

class NewsletterResource extends Resource
{
    protected static ?string $model = Newsletter::class;

    protected static ?string $label = "Subscriber";
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                ->label('Email')
                ->required()
                ->unique(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),

                // Custom Bulk Action for sending email
                Tables\Actions\BulkAction::make('send_email')
                    ->label('Прати емаил')
                    ->modalHeading('Испрати емаил')
                    ->modalButton('Испрати')
                    ->form([
                        Forms\Components\TextInput::make('subject')
                            ->label('Наслов на емаил')
                            ->required(),
                        Forms\Components\RichEditor::make('message')
                            ->label('Содржина на емаил')
                            ->required(),
                    ])
                    ->action(function (array $data, $records) {
                        $batchSize = 10;
                        $delay = 30;

                        $records->chunk($batchSize)->each(function ($batch, $index) use ($data, &$delay) {
                            foreach ($batch as $newsletter) {
                                SendNewsletterEmail::dispatch($newsletter, $data['subject'], $data['message'])
                                    ->delay(now()->addSeconds($delay));
                            }
                            $delay++;
                        });

                        Notification::make()
                            ->title('Емаилите се праќаат во позадина!')
                            ->success()
                            ->send();
                    }),
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
            'index' => Pages\ListNewsletters::route('/'),
            'create' => Pages\CreateNewsletter::route('/create'),
            'edit' => Pages\EditNewsletter::route('/{record}/edit'),
        ];
    }
}
