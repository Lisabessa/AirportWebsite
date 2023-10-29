#AirportWebsite

Domain name: [lisabessa.ru](https://lisabessa.ru/)

## Project stack

- CMS: bitrix
- PHP: 7.4
- MySQL: 8.0
- CSS: framework Tailwind
- server: bitrixVM, apache + nginx, memcache, server module google page speed, node.js v20.2.0.

# Technical description of the project

The sequence of actions for launching a web application - from the domain to its full functioning!

## Domain

### What is a "Domain"?
A domain is part of a website's address.
Any website address consists of domains at different levels.
For example, the address yandex.ru includes a “first-level domain” - “.ru” and a “second-level domain” - “yandex”.
A top-level domain usually denotes a country or topic. Thus, the domains “.ru” and “.рф” are intended for sites from Russia, and “.aero” are for air transport companies.
Domains of the second and subsequent levels most often indicate sections of the site or internal projects of the company - for example, market.yandex.ru.

> But in simple terms, a domain is just the name of a site! If we consider the first level of a domain, then in most cases we will refer to it as the regionality of a web application - that is, from a commercial point of view, the first level will make it clear - (audience, commercial market, regionality, etc.) - but it is not always worth relying on the first level domain, sometimes appearances are deceiving!

Now to the basics! The domain is purchased from a 'domain name registrar'!

### Who is a “Domain Name Registrar”?
> Domain name registrar - An organization authorized to create new domain names and renew the validity of existing domain names in a domain for which mandatory registration has been established.

In our case, the registrar `LLC "Domain Name Registrar REG.RU"` was chosen and a cloud server is purchased from it - for the current web application!

To purchase a domain lisabessa.ru you will need: a passport - for registration and only 200 rubles (but this amount can be much more than 200 rubles!)! Also for the domain itself - we will also need an `SSL` certificate!

### What is an “SSL certificate”?
>An SSL certificate is a digital certificate that authenticates a website and allows an encrypted connection. The abbreviation SSL stands for Secure Sockets Layer, a security protocol that creates an encrypted connection between a web server and a web browser.

In our case, we didn’t have to buy it and REG.RU gave us a free one for 90 days - enough to develop a small web application!

After successfully purchasing an SSL certificate or receiving a free one, certificates will be provided by email or on the registrar’s website! For example: in text form (we parse the keys ourselves) or ready-made files! And then we begin to connect them to the project! The registrar will also provide a special code - they must place it in the records of the domain itself - but more on that later!

## Server
### Server rental
### Launching BitrixVM and setting it up
### We bind the domain to the server via DNS zones!
### Assembling and connecting an SSL certificate to the domain!
### Installing bitrix on BitrixVM
### Project structure - Installing bitrix on BitrixVM
### Installing Node.js and related add-ons!
### Add the project to git!