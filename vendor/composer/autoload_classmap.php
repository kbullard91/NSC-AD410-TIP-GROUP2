<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Config' => $baseDir . '/App/Config.php',
    'App\\Controllers\\Admin\\Dashboard' => $baseDir . '/App/Controllers/Admin/Dashboard.php',
    'App\\Controllers\\Admin\\Editor' => $baseDir . '/App/Controllers/Admin/Editor.php',
    'App\\Controllers\\Admin\\FAQ' => $baseDir . '/App/Controllers/Admin/FAQ.php',
    'App\\Controllers\\Admin\\Support' => $baseDir . '/App/Controllers/Admin/Support.php',
    'App\\Controllers\\Admin\\Test' => $baseDir . '/App/Controllers/Admin/Test.php',
    'App\\Controllers\\Faculty\\Dashboard' => $baseDir . '/App/Controllers/Faculty/Dashboard.php',
    'App\\Controllers\\Faculty\\FAQ' => $baseDir . '/App/Controllers/Faculty/FAQ.php',
    'App\\Controllers\\Faculty\\Support' => $baseDir . '/App/Controllers/Faculty/Support.php',
    'App\\Controllers\\Faculty\\TIP' => $baseDir . '/App/Controllers/Faculty/TIP.php',
    'App\\Controllers\\Home' => $baseDir . '/App/Controllers/ExampleController.php',
    'App\\Controllers\\Login' => $baseDir . '/App/Controllers/Login.php',
    'App\\Models\\AdminDash' => $baseDir . '/App/Models/AdminDash.php',
    'App\\Models\\FacultyDash' => $baseDir . '/App/Models/FacultyDash.php',
    'App\\Models\\TestDB' => $baseDir . '/App/Models/Test.php',
    'App\\Models\\TipEditor' => $baseDir . '/App/Models/TipEditor.php',
    'App\\SQLiteConnection' => $baseDir . '/App/Models/SQLiteConnection.php',
    'Core\\Controller' => $baseDir . '/Core/Controller.php',
    'Core\\Router' => $baseDir . '/Core/Router.php',
    'Core\\View' => $baseDir . '/Core/View.php',
    'GuzzleHttp\\Client' => $vendorDir . '/guzzlehttp/guzzle/src/Client.php',
    'GuzzleHttp\\ClientInterface' => $vendorDir . '/guzzlehttp/guzzle/src/ClientInterface.php',
    'GuzzleHttp\\Cookie\\CookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
    'GuzzleHttp\\Cookie\\CookieJarInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
    'GuzzleHttp\\Cookie\\FileCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
    'GuzzleHttp\\Cookie\\SessionCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
    'GuzzleHttp\\Cookie\\SetCookie' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
    'GuzzleHttp\\Exception\\BadResponseException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
    'GuzzleHttp\\Exception\\ClientException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
    'GuzzleHttp\\Exception\\ConnectException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
    'GuzzleHttp\\Exception\\GuzzleException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
    'GuzzleHttp\\Exception\\RequestException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
    'GuzzleHttp\\Exception\\SeekException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
    'GuzzleHttp\\Exception\\ServerException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
    'GuzzleHttp\\Exception\\TooManyRedirectsException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
    'GuzzleHttp\\Exception\\TransferException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
    'GuzzleHttp\\HandlerStack' => $vendorDir . '/guzzlehttp/guzzle/src/HandlerStack.php',
    'GuzzleHttp\\Handler\\CurlFactory' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
    'GuzzleHttp\\Handler\\CurlFactoryInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
    'GuzzleHttp\\Handler\\CurlHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
    'GuzzleHttp\\Handler\\CurlMultiHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
    'GuzzleHttp\\Handler\\EasyHandle' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
    'GuzzleHttp\\Handler\\MockHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
    'GuzzleHttp\\Handler\\Proxy' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
    'GuzzleHttp\\Handler\\StreamHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
    'GuzzleHttp\\MessageFormatter' => $vendorDir . '/guzzlehttp/guzzle/src/MessageFormatter.php',
    'GuzzleHttp\\Middleware' => $vendorDir . '/guzzlehttp/guzzle/src/Middleware.php',
    'GuzzleHttp\\Pool' => $vendorDir . '/guzzlehttp/guzzle/src/Pool.php',
    'GuzzleHttp\\PrepareBodyMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
    'GuzzleHttp\\Promise\\AggregateException' => $vendorDir . '/guzzlehttp/promises/src/AggregateException.php',
    'GuzzleHttp\\Promise\\CancellationException' => $vendorDir . '/guzzlehttp/promises/src/CancellationException.php',
    'GuzzleHttp\\Promise\\Coroutine' => $vendorDir . '/guzzlehttp/promises/src/Coroutine.php',
    'GuzzleHttp\\Promise\\EachPromise' => $vendorDir . '/guzzlehttp/promises/src/EachPromise.php',
    'GuzzleHttp\\Promise\\FulfilledPromise' => $vendorDir . '/guzzlehttp/promises/src/FulfilledPromise.php',
    'GuzzleHttp\\Promise\\Promise' => $vendorDir . '/guzzlehttp/promises/src/Promise.php',
    'GuzzleHttp\\Promise\\PromiseInterface' => $vendorDir . '/guzzlehttp/promises/src/PromiseInterface.php',
    'GuzzleHttp\\Promise\\PromisorInterface' => $vendorDir . '/guzzlehttp/promises/src/PromisorInterface.php',
    'GuzzleHttp\\Promise\\RejectedPromise' => $vendorDir . '/guzzlehttp/promises/src/RejectedPromise.php',
    'GuzzleHttp\\Promise\\RejectionException' => $vendorDir . '/guzzlehttp/promises/src/RejectionException.php',
    'GuzzleHttp\\Promise\\TaskQueue' => $vendorDir . '/guzzlehttp/promises/src/TaskQueue.php',
    'GuzzleHttp\\Promise\\TaskQueueInterface' => $vendorDir . '/guzzlehttp/promises/src/TaskQueueInterface.php',
    'GuzzleHttp\\Psr7\\AppendStream' => $vendorDir . '/guzzlehttp/psr7/src/AppendStream.php',
    'GuzzleHttp\\Psr7\\BufferStream' => $vendorDir . '/guzzlehttp/psr7/src/BufferStream.php',
    'GuzzleHttp\\Psr7\\CachingStream' => $vendorDir . '/guzzlehttp/psr7/src/CachingStream.php',
    'GuzzleHttp\\Psr7\\DroppingStream' => $vendorDir . '/guzzlehttp/psr7/src/DroppingStream.php',
    'GuzzleHttp\\Psr7\\FnStream' => $vendorDir . '/guzzlehttp/psr7/src/FnStream.php',
    'GuzzleHttp\\Psr7\\InflateStream' => $vendorDir . '/guzzlehttp/psr7/src/InflateStream.php',
    'GuzzleHttp\\Psr7\\LazyOpenStream' => $vendorDir . '/guzzlehttp/psr7/src/LazyOpenStream.php',
    'GuzzleHttp\\Psr7\\LimitStream' => $vendorDir . '/guzzlehttp/psr7/src/LimitStream.php',
    'GuzzleHttp\\Psr7\\MessageTrait' => $vendorDir . '/guzzlehttp/psr7/src/MessageTrait.php',
    'GuzzleHttp\\Psr7\\MultipartStream' => $vendorDir . '/guzzlehttp/psr7/src/MultipartStream.php',
    'GuzzleHttp\\Psr7\\NoSeekStream' => $vendorDir . '/guzzlehttp/psr7/src/NoSeekStream.php',
    'GuzzleHttp\\Psr7\\PumpStream' => $vendorDir . '/guzzlehttp/psr7/src/PumpStream.php',
    'GuzzleHttp\\Psr7\\Request' => $vendorDir . '/guzzlehttp/psr7/src/Request.php',
    'GuzzleHttp\\Psr7\\Response' => $vendorDir . '/guzzlehttp/psr7/src/Response.php',
    'GuzzleHttp\\Psr7\\ServerRequest' => $vendorDir . '/guzzlehttp/psr7/src/ServerRequest.php',
    'GuzzleHttp\\Psr7\\Stream' => $vendorDir . '/guzzlehttp/psr7/src/Stream.php',
    'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => $vendorDir . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
    'GuzzleHttp\\Psr7\\StreamWrapper' => $vendorDir . '/guzzlehttp/psr7/src/StreamWrapper.php',
    'GuzzleHttp\\Psr7\\UploadedFile' => $vendorDir . '/guzzlehttp/psr7/src/UploadedFile.php',
    'GuzzleHttp\\Psr7\\Uri' => $vendorDir . '/guzzlehttp/psr7/src/Uri.php',
    'GuzzleHttp\\Psr7\\UriNormalizer' => $vendorDir . '/guzzlehttp/psr7/src/UriNormalizer.php',
    'GuzzleHttp\\Psr7\\UriResolver' => $vendorDir . '/guzzlehttp/psr7/src/UriResolver.php',
    'GuzzleHttp\\RedirectMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
    'GuzzleHttp\\RequestOptions' => $vendorDir . '/guzzlehttp/guzzle/src/RequestOptions.php',
    'GuzzleHttp\\RetryMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
    'GuzzleHttp\\TransferStats' => $vendorDir . '/guzzlehttp/guzzle/src/TransferStats.php',
    'GuzzleHttp\\UriTemplate' => $vendorDir . '/guzzlehttp/guzzle/src/UriTemplate.php',
    'League\\OAuth2\\Client\\Grant\\AbstractGrant' => $vendorDir . '/league/oauth2-client/src/Grant/AbstractGrant.php',
    'League\\OAuth2\\Client\\Grant\\AuthorizationCode' => $vendorDir . '/league/oauth2-client/src/Grant/AuthorizationCode.php',
    'League\\OAuth2\\Client\\Grant\\ClientCredentials' => $vendorDir . '/league/oauth2-client/src/Grant/ClientCredentials.php',
    'League\\OAuth2\\Client\\Grant\\Exception\\InvalidGrantException' => $vendorDir . '/league/oauth2-client/src/Grant/Exception/InvalidGrantException.php',
    'League\\OAuth2\\Client\\Grant\\GrantFactory' => $vendorDir . '/league/oauth2-client/src/Grant/GrantFactory.php',
    'League\\OAuth2\\Client\\Grant\\Password' => $vendorDir . '/league/oauth2-client/src/Grant/Password.php',
    'League\\OAuth2\\Client\\Grant\\RefreshToken' => $vendorDir . '/league/oauth2-client/src/Grant/RefreshToken.php',
    'League\\OAuth2\\Client\\Provider\\AbstractProvider' => $vendorDir . '/league/oauth2-client/src/Provider/AbstractProvider.php',
    'League\\OAuth2\\Client\\Provider\\Exception\\IdentityProviderException' => $vendorDir . '/league/oauth2-client/src/Provider/Exception/IdentityProviderException.php',
    'League\\OAuth2\\Client\\Provider\\GenericProvider' => $vendorDir . '/league/oauth2-client/src/Provider/GenericProvider.php',
    'League\\OAuth2\\Client\\Provider\\GenericResourceOwner' => $vendorDir . '/league/oauth2-client/src/Provider/GenericResourceOwner.php',
    'League\\OAuth2\\Client\\Provider\\ResourceOwnerInterface' => $vendorDir . '/league/oauth2-client/src/Provider/ResourceOwnerInterface.php',
    'League\\OAuth2\\Client\\Token\\AccessToken' => $vendorDir . '/league/oauth2-client/src/Token/AccessToken.php',
    'League\\OAuth2\\Client\\Tool\\ArrayAccessorTrait' => $vendorDir . '/league/oauth2-client/src/Tool/ArrayAccessorTrait.php',
    'League\\OAuth2\\Client\\Tool\\BearerAuthorizationTrait' => $vendorDir . '/league/oauth2-client/src/Tool/BearerAuthorizationTrait.php',
    'League\\OAuth2\\Client\\Tool\\MacAuthorizationTrait' => $vendorDir . '/league/oauth2-client/src/Tool/MacAuthorizationTrait.php',
    'League\\OAuth2\\Client\\Tool\\QueryBuilderTrait' => $vendorDir . '/league/oauth2-client/src/Tool/QueryBuilderTrait.php',
    'League\\OAuth2\\Client\\Tool\\RequestFactory' => $vendorDir . '/league/oauth2-client/src/Tool/RequestFactory.php',
    'League\\OAuth2\\Client\\Tool\\RequiredParameterTrait' => $vendorDir . '/league/oauth2-client/src/Tool/RequiredParameterTrait.php',
    'Psr\\Http\\Message\\MessageInterface' => $vendorDir . '/psr/http-message/src/MessageInterface.php',
    'Psr\\Http\\Message\\RequestInterface' => $vendorDir . '/psr/http-message/src/RequestInterface.php',
    'Psr\\Http\\Message\\ResponseInterface' => $vendorDir . '/psr/http-message/src/ResponseInterface.php',
    'Psr\\Http\\Message\\ServerRequestInterface' => $vendorDir . '/psr/http-message/src/ServerRequestInterface.php',
    'Psr\\Http\\Message\\StreamInterface' => $vendorDir . '/psr/http-message/src/StreamInterface.php',
    'Psr\\Http\\Message\\UploadedFileInterface' => $vendorDir . '/psr/http-message/src/UploadedFileInterface.php',
    'Psr\\Http\\Message\\UriInterface' => $vendorDir . '/psr/http-message/src/UriInterface.php',
    'RandomLib\\AbstractMcryptMixer' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/AbstractMcryptMixer.php',
    'RandomLib\\AbstractMixer' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/AbstractMixer.php',
    'RandomLib\\AbstractSource' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/AbstractSource.php',
    'RandomLib\\Factory' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Factory.php',
    'RandomLib\\Generator' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Generator.php',
    'RandomLib\\Mixer' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Mixer.php',
    'RandomLib\\Mixer\\Hash' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Mixer/Hash.php',
    'RandomLib\\Mixer\\McryptRijndael128' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Mixer/McryptRijndael128.php',
    'RandomLib\\Mixer\\XorMixer' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Mixer/XorMixer.php',
    'RandomLib\\Source' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source.php',
    'RandomLib\\Source\\CAPICOM' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source/CAPICOM.php',
    'RandomLib\\Source\\MTRand' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source/MTRand.php',
    'RandomLib\\Source\\MicroTime' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source/MicroTime.php',
    'RandomLib\\Source\\OpenSSL' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source/OpenSSL.php',
    'RandomLib\\Source\\Rand' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source/Rand.php',
    'RandomLib\\Source\\Random' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source/Random.php',
    'RandomLib\\Source\\RandomBytes' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source/RandomBytes.php',
    'RandomLib\\Source\\Sodium' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source/Sodium.php',
    'RandomLib\\Source\\URandom' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source/URandom.php',
    'RandomLib\\Source\\UniqID' => $vendorDir . '/ircmaxell/random-lib/lib/RandomLib/Source/UniqID.php',
    'SecurityLib\\AbstractFactory' => $vendorDir . '/ircmaxell/security-lib/lib/SecurityLib/AbstractFactory.php',
    'SecurityLib\\BaseConverter' => $vendorDir . '/ircmaxell/security-lib/lib/SecurityLib/BaseConverter.php',
    'SecurityLib\\BigMath' => $vendorDir . '/ircmaxell/security-lib/lib/SecurityLib/BigMath.php',
    'SecurityLib\\BigMath\\BCMath' => $vendorDir . '/ircmaxell/security-lib/lib/SecurityLib/BigMath/BCMath.php',
    'SecurityLib\\BigMath\\GMP' => $vendorDir . '/ircmaxell/security-lib/lib/SecurityLib/BigMath/GMP.php',
    'SecurityLib\\BigMath\\PHPMath' => $vendorDir . '/ircmaxell/security-lib/lib/SecurityLib/BigMath/PHPMath.php',
    'SecurityLib\\Enum' => $vendorDir . '/ircmaxell/security-lib/lib/SecurityLib/Enum.php',
    'SecurityLib\\Hash' => $vendorDir . '/ircmaxell/security-lib/lib/SecurityLib/Hash.php',
    'SecurityLib\\Strength' => $vendorDir . '/ircmaxell/security-lib/lib/SecurityLib/Strength.php',
    'SecurityLib\\Util' => $vendorDir . '/ircmaxell/security-lib/lib/SecurityLib/Util.php',
    'smtech\\OAuth2\\Client\\Provider\\CanvasLMS' => $vendorDir . '/smtech/oauth2-canvaslms/src/Provider/CanvasLMS.php',
    'smtech\\OAuth2\\Client\\Provider\\CanvasLMSResourceOwner' => $vendorDir . '/smtech/oauth2-canvaslms/src/Provider/CanvasLMSResourceOwner.php',
);
