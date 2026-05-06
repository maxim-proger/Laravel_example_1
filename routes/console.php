<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('joke:fetch')->everyFiveMinutes();