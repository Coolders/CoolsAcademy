# CoolsAcademy


## Table of Contents
1. [General Info](#general-info)
2. [Concept](#Concept)
3. [Stack and Technologies](#stack-technologies)
4. [Installation and Setup](#installation-setup)
5. [Collaboration](#collaboration)

## General info
***
* This is a collaborative Laravel CRUD project for the Full Stack Development Bootcamp.
* Project status: work in progress. Some image adjustments are missing since we use libraria faker.


## Concept
***

A software development group wants to create a web application to manage their online events such as workshops, masterclasses or webinars.

Users will be able to see the description of an event, sign up and unsubscribe. They will be able to see the list of events they have signed up for. The administrator must have the tools for the management (CRUD) of the events.

* Requisitos Funcionales

- On the front page, the application will have a slider with the highlighted masterclasses. these will be selectable by the administrator.
- On the cover there will be a paginated list with all the events ordered from the closest to the furthest.
- The events will include at least: title, date / time, maximum number of participants, description and an image.
- Past events must be kept in the list but identifiable as unavailable.
- Users will need to register to sign up for an event. Once signed up, they will not be able to do it again.
- When signing up for an event, they will receive an email (business - html) with the link (zoom, meets, etc ..) where it will be held, as well as remembering the title of the event, the time and the day.
- Users will be able to see on one page the list of events to which they are registered.
- The administrator will be able to CRUD the events.
- When an event is full (maximum number of participants) no one will be able to register.

## Stack and Technologies

* php 8.0 - https://www.php.net/
* Laravel - https://laravel.com/
* Composer 2.0.13 - https://getcomposer.org/
* Bootstrap - https://getbootstrap.com/
* SASS - https://sass-lang.com/
* Trello - https://trello.com/
* Heroku - https://www.heroku.com/
* Figma - https://www.figma.com
* Balsamiq - https://balsamiq.com/


## Installation and Setup

* Git clone https://github.com/Gabi2606/CoolsAcademy.git

* Install Composer if you don't have already globally installed
```
$ composer install

* Or make an Update
```
$ composer update

* Laravel
```
$ php artisan serve
$ php artisan test
```
*Run Sass
```
$ npm run watch
```

## Collaboration

* David Sánchez
* Gabriela Piñeiro
* Amr Hefny
* Andriu Suárez
* Andres Patiño

