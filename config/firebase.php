<?php

declare(strict_types=1);

return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */

    'default' => env('FIREBASE_PROJECT', 'app'),

    /*
     * ------------------------------------------------------------------------
     * Firebase project configurations
     * ------------------------------------------------------------------------
     */

    'projects' => [
        'app' => [

            /*
             * ------------------------------------------------------------------------
             * Credentials / Service Account
             * ------------------------------------------------------------------------
             *
             * In order to access a Firebase project and its related services using a
             * server SDK, requests must be authenticated. For server-to-server
             * communication this is done with a Service Account.
             *
             * If you don't already have generated a Service Account, you can do so by
             * following the instructions from the official documentation pages at
             *
             * https://firebase.google.com/docs/admin/setup#initialize_the_sdk
             *
             * Once you have downloaded the Service Account JSON file, you can use it
             * to configure the package.
             *
             * If you don't provide credentials, the Firebase Admin SDK will try to
             * auto-discover them
             *
             * - by checking the environment variable FIREBASE_CREDENTIALS
             * - by checking the environment variable GOOGLE_APPLICATION_CREDENTIALS
             * - by trying to find Google's well known file
             * - by checking if the application is running on GCE/GCP
             *
             * If no credentials file can be found, an exception will be thrown the
             * first time you try to access a component of the Firebase Admin SDK.
             *
             */

            'credentials' => [
                'type' => 'service_account',
                'project_id' => 'testconnection-345113',
                'private_key_id' => "-----BEGIN PRIVATE KEY-----\nMIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQC4bTwUf7lCXX6k\nCS2ZDa81cyJyB+tcH8Uxb+ZRGsv9njJaqAhw7WFf3HX/xt0XxlMzArTky7ENwFcM\n4Zzbo29A6MqkpzgCja8o/N0HlmfmTggG+CSyLOh/u85uGbgDVvEBIs1d3do6tPRA\nkcabGNknuzbd5k8eeaTRYGz3KARcbcpCD83Izs7dZy+Y9dKZ2MvqwcXUlH9dtZ8p\n6JH5/cgIe2i0UXVNm/hOfwesb+T+0kT5XBqL74IZ3QQxsNzXP6koiZkN1tzpj0Rz\n834mAoBHUFSjTsF6kxOC8E4bJILWO8PmR4q4n5eIfQ8k1+nmfelkb5xZLl8hb5Nj\n9upVwWTJAgMBAAECggEAHNGs/sMKrw0vGfD5OB6ET4TjUBBevfGU/emvguL+F26e\nDb6OOx9NBQ7NPZ/Usr9iBumYXNxbmXuB3thui3/Zhboa2Gns/bEoOu5wl5vwNnPh\nGz2xdkpANp2hX2ETeSof1P6cOtvNGzllpaVh9KCIZoYBx+ESYf++Op2nyWNucwbM\nzL/1WG/T9/8r+vNjKiQNaEN9L+6pvk8yPVF1+Jyyrs38m8IX75W61YbpOcPnmh8f\nOdcMaNIP42dckFg119zP/vuefAavRR2XxspZMUBC7iHn0it3hYmT+Axx2e8tmIs/\niQW7bdSBvlHMelrGLtL3Z7KEqR2KYZ2AxjZ19wLjxQKBgQDukp31zkjrnTCi8sHi\n/NTIsyO7jhSE0fgnJ9yKSTZNd82qciORBlnkPX3sdbLsVYGZpX/TSuVIm5gBaTG2\nqW7iEJe7OQ2bLauxgbTLpZlWeVTV0nP8wRm+1YDIdK3w0c5h9ZjA+BRBwlHY+qzg\nXE0Niq1rek/BHKQDSJ0JsL26KwKBgQDF5hIGkG3UdOeIXyAo+DOLUjE9T1PqherM\n9jsLEDppARnY6Yudfkk+AYMf8kql+AOrB0+ixf17rNVylGHltVxkgh55uY9BSfp/\n3RGgidLSzaL0hweSYRrm/14GumkVXIXHOTgQOy8UaOoSsHlEJOWiqiPfVnPwtO5M\nvtqvfNJm2wKBgC9Fyhr8xyI4wXxoUdbidl9Wb8woORSgbmWD1oVoQGRVSuFtQHLq\nKUG6lYsXP17pCochbhS2EHy0qAgPihRBuoD8/LPSeEm5YP4JT4PSynGCFTdRPj5l\nHO7da2lNBXJkgFqUybHi9lCZapJuCXdjkrkOM5LKZ6dCP5WO+98BsHaFAoGAV03Y\nRe0RhtjMC+1rUqeslZn8/v8wFhZeL22xPoA6RHin3nmpjiFYTnJ8VmudYvq3I4xm\nJXkTCqyEvbeYOK55xB1jNHAYMsVgLWhpjlk/GKB/c0DepkUQiTe/U1iJY1Md8XXc\ntcxmSKrAGN6hoN5mMAy/JpgNLfOj7VeFQkXezGECgYApXqVN6KTU4rQUGgKLmW74\ndt+y/2njnbeflMoYKPbXUto6K6w/kI1VUwmWSlcW7ulP8er1dveGTuHURWolmOI9\n+ilpNiY8r4jt46N8qvXkSG6lShmTptYSDJTodVXiKHBs7whJVDslo3G2EtlFvouZ\nimuxnmrvsuCfIA1xx9qSLQ==\n-----END PRIVATE KEY-----\n",
                'private_key' => '-----BEGIN PRIVATE KEY-----\nFOO_BAR_123456789\n-----END PRIVATE KEY-----\n',
                'client_email' => 'firebase-adminsdk-q63nb@testconnection-345113.iam.gserviceaccount.com',
                'client_id' => '112320629666878698654',
                'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
                'token_uri' => 'https://oauth2.googleapis.com/token',
                'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
                'client_x509_cert_url' => 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-cwiuo%40some-project-123.iam.gserviceaccount.com',
                'universe_domain' => 'googleapis.com',
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Auth Component
             * ------------------------------------------------------------------------
             */

            'auth' => [
                'tenant_id' => env('FIREBASE_AUTH_TENANT_ID'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firestore Component
             * ------------------------------------------------------------------------
             */

            'firestore' => [

                /*
                 * If you want to access a Firestore database other than the default database,
                 * enter its name here.
                 *
                 * By default, the Firestore client will connect to the `(default)` database.
                 *
                 * https://firebase.google.com/docs/firestore/manage-databases
                 */

                // 'database' => env('FIREBASE_FIRESTORE_DATABASE'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Realtime Database
             * ------------------------------------------------------------------------
             */

            'database' => [

                /*
                 * In most of the cases the project ID defined in the credentials file
                 * determines the URL of your project's Realtime Database. If the
                 * connection to the Realtime Database fails, you can override
                 * its URL with the value you see at
                 *
                 * https://console.firebase.google.com/u/1/project/_/database
                 *
                 * Please make sure that you use a full URL like, for example,
                 * https://my-project-id.firebaseio.com
                 */

                'url' => env('FIREBASE_DATABASE_URL'),

                /*
                 * As a best practice, a service should have access to only the resources it needs.
                 * To get more fine-grained control over the resources a Firebase app instance can access,
                 * use a unique identifier in your Security Rules to represent your service.
                 *
                 * https://firebase.google.com/docs/database/admin/start#authenticate-with-limited-privileges
                 */

                // 'auth_variable_override' => [
                //     'uid' => 'my-service-worker'
                // ],

            ],

            'dynamic_links' => [

                /*
                 * Dynamic links can be built with any URL prefix registered on
                 *
                 * https://console.firebase.google.com/u/1/project/_/durablelinks/links/
                 *
                 * You can define one of those domains as the default for new Dynamic
                 * Links created within your project.
                 *
                 * The value must be a valid domain, for example,
                 * https://example.page.link
                 */

                'default_domain' => env('FIREBASE_DYNAMIC_LINKS_DEFAULT_DOMAIN'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Cloud Storage
             * ------------------------------------------------------------------------
             */

            'storage' => [

                /*
                 * Your project's default storage bucket usually uses the project ID
                 * as its name. If you have multiple storage buckets and want to
                 * use another one as the default for your application, you can
                 * override it here.
                 */

                'default_bucket' => env('FIREBASE_STORAGE_DEFAULT_BUCKET'),

            ],

            /*
             * ------------------------------------------------------------------------
             * Caching
             * ------------------------------------------------------------------------
             *
             * The Firebase Admin SDK can cache some data returned from the Firebase
             * API, for example Google's public keys used to verify ID tokens.
             *
             */

            'cache_store' => env('FIREBASE_CACHE_STORE', 'file'),

            /*
             * ------------------------------------------------------------------------
             * Logging
             * ------------------------------------------------------------------------
             *
             * Enable logging of HTTP interaction for insights and/or debugging.
             *
             * Log channels are defined in config/logging.php
             *
             * Successful HTTP messages are logged with the log level 'info'.
             * Failed HTTP messages are logged with the log level 'notice'.
             *
             * Note: Using the same channel for simple and debug logs will result in
             * two entries per request and response.
             */

            'logging' => [
                'http_log_channel' => env('FIREBASE_HTTP_LOG_CHANNEL'),
                'http_debug_log_channel' => env('FIREBASE_HTTP_DEBUG_LOG_CHANNEL'),
            ],

            /*
             * ------------------------------------------------------------------------
             * HTTP Client Options
             * ------------------------------------------------------------------------
             *
             * Behavior of the HTTP Client performing the API requests
             */

            'http_client_options' => [

                /*
                 * Use a proxy that all API requests should be passed through.
                 * (default: none)
                 */

                'proxy' => env('FIREBASE_HTTP_CLIENT_PROXY'),

                /*
                 * Set the maximum amount of seconds (float) that can pass before
                 * a request is considered timed out
                 *
                 * The default time out can be reviewed at
                 * https://github.com/kreait/firebase-php/blob/6.x/src/Firebase/Http/HttpClientOptions.php
                 */

                'timeout' => env('FIREBASE_HTTP_CLIENT_TIMEOUT'),

                'guzzle_middlewares' => [],
            ],
        ],
    ],
];
