[![PHP CI](https://github.com/ForeachQ/brain-games/actions/workflows/php-ci.yml/badge.svg)](https://github.com/ForeachQ/brain-games/actions/workflows/php-ci.yml)
<a href="https://codeclimate.com/github/ForeachQ/brain-games/maintainability"><img src="https://api.codeclimate.com/v1/badges/e01ecaae2a0e999d254f/maintainability"/></a>


# Brain Games

«Brain Games» — a set of five console games based on popular mobile brain training apps.

## Description

Each game asks questions that need to be answered correctly. After three correct answers, the game is considered to be
completed. Wrong answers end the game and offer to play it again.

Games:

- Calculator. Arithmetic expressions to be evaluated.
- Progression. Search for missing numbers in a sequence of numbers.
- Definition of an even number.
- Determining the greatest common divisor.
- Definition of a prime number.

## Requirements

- php 7.4
- composer 2.*

## Installation

- Download package

```bash
composer create-project foreachq/brain-games
```

- Install dependencies

```
make install
```

## Usage

- Choose 1 game from list:
    - Definition of an even number (brain-even)
    - Calculator (brain-calc)
    - Determining the greatest common divisor (brain-gcd)
    - Progression (brain-progression)
    - Definition of a prime number (brain-prime)

- Run make command:

```
make <game-name>
```

## Asciinemas of gameplay

- [brain-even](https://asciinema.org/a/463960)
- [brain-calc](https://asciinema.org/a/464242)
- [brain-gcd](https://asciinema.org/a/464244)
- [brain-progression](https://asciinema.org/a/464267)
- [brain-prime](https://asciinema.org/a/464278)
