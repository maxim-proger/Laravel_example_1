<?php

namespace App\Console\Commands;

use App\Models\Joke;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchRandomJoke extends Command
{
    protected $signature = 'joke:fetch';
    protected $description = 'Получает случайную шутку из API и сохраняет в БД';

    public function handle()
    {
        $apiUrl = 'https://official-joke-api.appspot.com/random_joke';

        try {
            $response = Http::get($apiUrl);

            if ($response->successful()) {
                $data = $response->json();

                Joke::create([
                    'type'      => $data['type'] ?? null,
                    'setup'     => $data['setup'],
                    'punchline' => $data['punchline'],
                ]);

                $this->info('Шутка успешно сохранена: ' . $data['setup']);
                return Command::SUCCESS;
            } else {
                $this->error('Ошибка при запросе к API. Код: ' . $response->status());
                return Command::FAILURE;
            }
        } catch (\Exception $e) {
            $this->error('Исключение: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}