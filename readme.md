## PHPasswordPusher (v2)

Parallel development for v2 of PHPasswordPusher. **This is a very broken development branch.**

**DO NOT USE.**

### Requirements
* Apache or Nginx
* PHP >= 5.5.9
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

### Setup

1. Clone this repository to your location of choice: `git clone git@github.com:bemosior/PHPasswordPusher.git`.
2. Create the database: `touch PHPasswordPusher/storage/database.sqlite`
3. Configure Apache or Nginx to serve `PHPasswordPusher/public`. Use the [Laravel documentation](http://laravel.com/docs/5.1#installation) for guidance, or do some googling until we fix up this documentation.

### Development

Documentation for the framework (Laravel 5.1) can be found on the [Laravel website](http://laravel.com/docs). To get a development environment up and running, see the [Laravel Homestead documentation](http://laravel.com/docs/5.1/homestead). You can reference the following example Homestead configuration, if it helps:

```
---
ip: "192.168.10.10"
memory: 2048
cpus: 2
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/Documents/workspace/PHPasswordPusher
      to: /home/vagrant/PHPasswordPusher

sites:
    - map: phpw.local
      to: /home/vagrant/PHPasswordPusher/public

variables:
    - key: APP_ENV
      value: local
```