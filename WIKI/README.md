# Техническое описание проекта

Последовательность действий запуска веб-приложения - от домена до его полного функционирования!

## Домен

### Что такое «Домен» ?
Домен — это часть адреса сайта.
Любой адрес сайта состоит из доменов `разных уровней`.
Например, в адрес yandex.ru входит `домен первого уровня` — «.ru» и `домен второго уровня` — «yandex». 
Домен первого уровня обычно обозначает страну или тематику. Так, домены «.ru» и «.рф» предназначены для сайтов из России, а «.aero» — для авиатранспортных компаний. 
Домены второго и последующих уровней чаще всего указывают на разделы сайта или внутренние проекты компании — например, market.yandex.ru.

> Но если говорить простыми словами домен это - просто имя сайта! Если расматривать первый уровень домена - то его будем относить в большинстве случаев как к региональности веб приложения - тоесть с коммерческой точки зрения первый уровень даст понять его - ( аудиторию , коммерческий рынок, региональность и др. ) - но не всегда стоит пологаться на первый уровень домена, порой внешность обманчива !

Теперь к самому основному! Домен преобретается у `регистратора доменных имен`!

### Кто такой «Регистратор доменных имён» ?
> Регистратор доменных имён - Организация, уполномоченная создавать новые доменные имена и продлевать срок действия уже существующих доменных имён в домене, для которого установлена обязательная регистрация.

В нашем случае - был выбран регистратор `ООО «Регистратор доменных имен РЕГ.РУ»` в нем же и преобретается облачный сервер - для текущего веб-приложения!

Для покупки домена lisabessa.ru потребуется: паспорт - для регистрации и всего 200 рублей ( но эта сумма может составлять куда больше 200 рублей! )! Также для самого домена - нам потребуется еще и `SSL` сертификат!

### Что такое «SSL-сертификат» ?
>SSL-сертификат – это цифровой сертификат, удостоверяющий подлинность веб-сайта и позволяющий использовать зашифрованное соединение. Аббревиатура SSL означает Secure Sockets Layer – протокол безопасности, создающий зашифрованное соединение между веб-сервером и веб-браузером.

В нашем случае - покупать непришлось и РЕГ.РУ выдал бесплатный на 90 дней - в полне хватит для разработки небольшоего веб-приложения!

После успешной покупки SSL-сертификата или получения бесплатного - на почту либо на самом сайте регистратора будут предоставлены сертификаты! Например: в текстовом виде (ключи разбираем самостоятельно) либо готовые файлы! И после уже приступаем к их подключению к проекту! Также регистратор предоставит спицальный код - должны разместить его в записях самого домена - но об этом чуть позже!

## Сервер
### Аренда сервера
### Запуск BitrixVM и его настройка
### Привязываем домен к серверу через DNS зоны!
### Сборка и подключение SSL сертификата к домену!
### Установка bitrix на BitrixVM
### Структура проекта - Установка bitrix на BitrixVM
### Установка Node.js и прилегающие дополнения!
### Добавляем проект в git!












## Table of Contents

- [Setting Up the project locally](#setting-up-the-project-locally)
- [Submitting a Pull Request](#submitting-a-pull-request)

## Setting Up the project locally

To install the project you need to have `node` and `npm`

1.  [Fork](https://help.github.com/articles/fork-a-repo/) the project, clone
    your fork:

    ```sh
    # Clone your fork
    git clone https://github.com/<your-username>/readme-md-generator.git

    # Navigate to the newly cloned directory
    cd readme-md-generator
    ```

2.  Your environment needs to be running `node` version >= 9.3.0 and `npm` version >= 5.5.0.

3.  from the root of the project: `npm` to install all dependencies

    - make sure you have latest `npm` version

4.  from the root of the project: `npm start` to run the cli.

> Tip: Keep your `master` branch pointing at the original repository and make
> pull requests from branches on your fork. To do this, run:
>
> ```sh
> git remote add upstream https://github.com/kefranabg/readme-md-generator.git
> git fetch upstream
> git branch --set-upstream-to=upstream/master master
> ```
>
> This will add the original repository as a "remote" called "upstream," then
> fetch the git information from that remote, then set your local `master`
> branch to use the upstream master branch whenever you run `git pull`. Then you
> can make all of your pull request branches based on this `master` branch.
> Whenever you want to update your version of `master`, do a regular `git pull`.

## Submitting a Pull Request

Please go through existing issues and pull requests to check if somebody else is already working on it.

Also, make sure to run the tests and lint the code before you commit your
changes.

```sh
npm run test
npm run lint
```
