<?php

require '../model/database.php';
require '../model/game_db.php';
require_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$games = select_all_games();
$spreadsheet = new Spreadsheet();


$spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'ID')
        ->setCellValue('B1', 'GAME NAME')
        ->setCellValue('C1', 'GAME PRICE')
        ->setCellValue('D1', 'QTY');

$i = 2;
foreach ($games as $game) {
    $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A' . $i, $game['game_id'])
            ->setCellValue('B' . $i, $game['game_name'])
            ->setCellValue('C' . $i, $game['game_price'])
            ->setCellValue('D' . $i, $game['qty']);

    $i++;
}

$writer = new Xlsx($spreadsheet);
$fxls = 'Gamelist.xlsx';
$writer->save($fxls);
include '../view/home.php';
?>






