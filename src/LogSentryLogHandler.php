<?php
namespace LogSentry\Laravel;

use Illuminate\Support\Facades\Http;
use Monolog\Level;
use Monolog\Logger;
use Monolog\LogRecord;
use Monolog\Handler\AbstractProcessingHandler;

class LogSentryLogHandler extends AbstractProcessingHandler
{
    public function __construct(int|string|Level $level = Level::Debug, bool $bubble = true)
    {
        parent::__construct($level, $bubble);
    }

    protected function write(LogRecord $record): void
    {
        defer(function () use($record) {
            Http::withToken(config('logsentry.secret'))
                ->acceptJson()
                ->post(config('logsentry.endpoint'),
                [
                    'msg' => $record->message,
                    'app' => config('app.name'),
                    'level' => $record->level->toRFC5424Level(),
                    'context' => json_encode($record->context)
                ]
            );
        });
    }
}