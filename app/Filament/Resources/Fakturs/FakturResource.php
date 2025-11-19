<?php

namespace App\Filament\Resources\Fakturs;

use App\Models\Faktur;
use App\Models\Customer;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select; 
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Forms\Components\Repeater;
use BackedEnum;

class FakturResource extends Resource
{
    protected static ?string $model = Faktur::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $recordTitleAttribute = 'nomor_faktur';

  public static function form(Schema $schema): Schema
    {
    return $schema->schema([
        TextInput::make('nomor_faktur')
            ->label('Nomor Faktur')
            ->required(),

        DatePicker::make('tanggal_faktur')
            ->label('Tanggal Faktur')
            ->required(),

        Select::make('customer_id')
            ->label('Customer')
            ->relationship('customer', 'nama_customer')
            ->required(),

        Textarea::make('ket_faktur')
            ->label('Keterangan Faktur')
            ->nullable(),

        Repeater::make('details')
            ->relationship('details')
            ->label('Detail Produk')
            ->schema([
                Select::make('product_id')
                    ->relationship('product', 'nama_produk')
                    ->label('Produk')
                    ->required(),

                TextInput::make('qty')
                    ->numeric()
                    ->required()
                    ->label('Qty'),

                TextInput::make('harga')
                    ->numeric()
                    ->required()
                    ->label('Harga'),

                TextInput::make('subtotal')
                    ->numeric()
                    ->required()
                    ->label('Subtotal'),
            ])
            ->columns(4),

        TextInput::make('total')
            ->label('Total')
            ->numeric()
            ->required(),

        TextInput::make('nominal_charge')
            ->label('Nominal Charge')
            ->numeric()
            ->required(),

        TextInput::make('charge')
            ->label('Charge')
            ->numeric()
            ->required(),

        TextInput::make('total_final')
            ->label('Total Final')
            ->numeric()
            ->required(),
    ]);
}


    
  
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor_faktur')
                    ->label('Nomor Faktur')
                    ->searchable(),
                TextColumn::make('tanggal_faktur')
                    ->label('Tanggal')
                    ->date(),
                TextColumn::make('total')
                    ->label('Total Harga')
                    ->money('IDR'),
                TextColumn::make('customer.nama_customer'),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
                Actions\ForceDeleteAction::make(),
                Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Actions\DeleteBulkAction::make(),
                Actions\ForceDeleteBulkAction::make(),
                Actions\RestoreBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFakturs::route('/'),
            'create' => Pages\CreateFaktur::route('/create'),
            'edit' => Pages\EditFaktur::route('/{record}/edit'),
        ];
    }
}
