# kirby3-arena

Kirbytext plugin to embed Are.na channels

## Installation

### Download

Download and copy this repository to `/site/plugins/arena`.

### Git submodule

```bash
git submodule add https://github.com/kx550/kirby3-arena.git site/plugins/arena
```

### Composer

```bash
composer require kx550/arena
```

## Usage

You need the slug of the arena user and channel:

```
(arena: tim-duvendack/aesthetics-1483967740)
```

### Additional attributes

You can use the following additional attributes:

- class: Set the class of the embed iframe (default: 'arena-embed')
- height: Set the height of the embed iframe (default: 400)
- width: Set the width of the embed iframe (default: 100%)

## License

MIT
