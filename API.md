# Mutter API Docs

## Features


## Overview

| Method | URL | Action | Version |
| OPTIONS | /generators | Lists docs and version information for the API | **1.0** |
| GET | /generators | Lists available generators. Accepts 'category' query filter. | **1.0** |
| GET | /generators/demo | Returns output from the generator named 'demo' | **1.0** |
| OPTIONS | /generators/demo | Returns description and options for the generator named 'demo' | **1.0** |
| GET | /generators/grammar | Returns the underlying grammar definition for the 'demo' generator | **1.0** |
| POST | /generators | Create a new generator | 2.0 |
| PUT | /generators/demo | Update the generator named 'demo' | 2.0 |
| DELETE | /generators/demo | Delete the generator named 'demo' | 2.0 |

## Wishlist

- Define reusable grammars via the API
- Ad-hoc grammar execution (submit the definition, get the output)