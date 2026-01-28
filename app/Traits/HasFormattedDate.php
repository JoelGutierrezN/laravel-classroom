<?php

namespace App\Traits;

trait HasFormattedDate {
    public function formattedDate(): string {
        $date = $this->created_at->locale('es');
        $dayNumber = $date->day;
        $dayName = ucfirst($date->dayName);
        $month = ucfirst($date->monthName);
        $year = $date->year;
        $time = $date->format('h:i a');

        return "$dayName $dayNumber de $month del $year a las $time";
    }
}
