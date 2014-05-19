# chevron.html

Chevron aims to be a 'simple set of useful tools'. This means that it
exists as a humble collection of code I've written and found quite useful.

Chevron.html is one attempt (of many) to make the act of writing HTML slightly
safer and easier. It offers elements as objects with properties and a system
of using PHP's magic __call() to create them quickly and inline.

If there is a downfall to this system (and *every* other system designed to tackle
the same task) it is that for all the buzz words I've tried to incorporate (OOP,
Di, testable, blah blah blah) it remains a very customized solution and using it
will couple an application to this (or that) specific toolset.

# usage

If there isn't an examples dir, look through the tests.

# installation

Using [composer](http://getcomposer.org/) `"require" : { "henderjon/chevron-html": "2.*" }`

# where is version 1.*?

Packagist (an important component to the composer ecosystem) prefers dashes as separators (I was
using dots). I had to update all the package names accordingly.

# license

See LICENSE.md for the [BSD-3-Clause](http://opensource.org/licenses/BSD-3-Clause) license.

## links

  - The [Packagist archive](https://packagist.org/packages/henderjon/chevron-html)
  - Reading on [Semantic Versioning](http://semver.org/)
  - Reading on[Composer Versioning](https://getcomposer.org/doc/01-basic-usage.md#package-versions)





