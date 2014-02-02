# What the who now?

A web wrapper around Joe Futrelle's rmutt project. Write grammar files that define the structure of arbitrary stuff (like cookbook recipes, X-Files plot summaries, or RFP documents), and rmutt will generate text from them.

No documentation for the moment, but the goal is to offer a pile of random grammars, a REST API for accessing generated text from each of them, and a pretty front end to test each one. Also, I'm using it as a chance to mess around with some lightweight frameworks, SASS goodness, and so on.

## What am I supposed to do with this?

Build the most robust lorem ipsum generator ever? Live your dream of creating the most popular "Random Band Name" web site on the planet? Generate random test data for a JSON service? I don't know, people, it's late and I promised my wife I'd make a Sleepy Hollow episode summary generator -- do whatever you want with it, as long as nobody gets hurt.

## Installation

There's a Vagrantfile that spins up a box with rmutt and all the fixings: for now, I'll consider it sufficient documentation of what's needed to run this code. Later I'll write it out for humans.

## To Do

* ~REST Interface~
* Variable mapping (pass in parameters for the grammar)
* Sample grammars
* Pretty front end
* Figure out how to avoid including Bourbon, Neat, and Bitters in the scss directory.