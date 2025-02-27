<?php

// config for VendorName/Skeleton
return [
    'secret' => env('LOGSENTRY_SECRET'),
    'endpoint' => env('LOGSENTRY_ENDPOINT', 'https://logsentry.dev/api/v1/event'),
];
