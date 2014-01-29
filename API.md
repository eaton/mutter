# Mutter API Docs

## Features
Make a call to the API, get back randomly generated text. It's not really rocket science.

## Overview

| Method | URL | Action | Version |
|--------|-----|--------|---------|
| OPTIONS | /api | Lists docs and version information for the API | **1.0** |
| GET | /api | Lists available generators. Accepts 'category' query filter. | **1.0** |
| GET | /api/example | Returns output from the generator named 'example' | **1.0** |
| OPTIONS | /api/example | Returns description and options for the generator named 'example' | **1.0** |
| GET | /api/example/grammar | Returns the underlying grammar definition for the 'example' generator | **1.0** |

## Wishlist

- Add, Update, Remove reusable grammars via the API
- Ad-hoc grammar execution (submit the definition, get the output)