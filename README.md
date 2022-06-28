# atavism-cms
Open Source CMS for Atavism.

Please note that this is still work in progress. Right now the CMS makes it possible for 
users to register on the website before starting to play and nothing more.

## Features

### Player Registration
Players can register on the website and then access the game.
For this to work you need to enable the RemotePhpAccountConnector on your Atavism Server:

Edit auth_server.py file in atavism_server/bin directory uncomment few lines and adjust the
value in connector.setUrl to point to your Atavism CMS installation.

```
connector = RemotePhpAccountConnector()
connector.setUrl("http://www.yourdomain.com/verifyAccount")
ms.setRemoteConnector(connector)
```

## Requested features
* Player Registration (partially complete)
* Subscription
* Item Shop
* Starter packages (i.e. like 10 USD to start with Highend Armor etc.)
* Auction House viewer
* Ingame mail to website

# Server requirments

* PHP >= 8.0
* BCMath PHP Extension
* Ctype PHP Extension
* cURL PHP Extension
* DOM PHP Extension
* Fileinfo PHP Extension
* JSON PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PCRE PHP Extension
* PDO PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

# Installation

See INSTALL.md

# Credits
Based on the Laravel framework (https://laravel.com/).
