# silex-cors-provider 
[![Build Status](https://travis-ci.org/SilexFriends/CORS.png)](https://travis-ci.org/SilexFriends/CORS) 
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/7b8ed0fc-2f5a-4e6f-84fd-030430a3482e/mini.png)](https://insight.sensiolabs.com/projects/7b8ed0fc-2f5a-4e6f-84fd-030430a3482e)
[![Dependency Status](https://www.versioneye.com/user/projects/55ddde652383e9002500006d/badge.svg?style=flat)](https://www.versioneye.com/user/projects/55ddde652383e9002500006d)
[![Codacy Badge](https://api.codacy.com/project/badge/grade/86d167f3a142416283f9f66240dc2f2f)](https://www.codacy.com/app/mrprompt/silex-cors-provider)

a simple dependency injection container to Silex.

# Install

```
composer require mrprompt/silex-cors-provider
```

# Use

```
use SilexFriends\Cors\Cors as CorsServiceProvider;

...


$app->register(new CorsServiceProvider());

```
## Testing

Just run *phpunit* without parameters

```
phpunit
```

#### LICENSE
MIT