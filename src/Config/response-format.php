<?php

// Config/response-format.php

return [
 
    /*
    |--------------------------------------------------------------------------
    | Default Language
    |--------------------------------------------------------------------------
    |
    | This value determines the default language for response messages.
    | You can set it to one of the supported language codes:
    |
    | Supported languages:
    |   - 'ar': Arabic
    |   - 'en': English
    |   - 'de': German
    |   - 'fr': French
    |   - 'es': Spanish
    |   - 'it': Italian
    |
    | If set to null, the language will be determined dynamically using the
    | application's default locale: <?php echo config('app.locale'); ?>
    |
    | If set to null or not defined, the default language will be 'en' (English).
    | Otherwise, it will be the application's default locale.
    |
    */
    'language' => config('app.locale', 'en'),

];
