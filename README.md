# wordpress-block-scaffold
The base of a WP block, with both PHP, SASS, and JavaScript involved

## Preparing to build it
Make sure you have the dependnecies in order:

- composer
- node
- yarn (optional)

(`yarn` and `npm` are interchangeable, you can use eityher or, I prefer `yarn`).

## Building it
Now that all pre-requisites are in order, let's buld the project!

Start by making sure the PHP follows coding standards with `composer run check-cs`.

Once that's in order, you could lint the JavaScript and styles with `yarn run lint:js` and `yarn run lint:css` respectively.

Once you're happy to build your project, use `yarn run build`, and you should end up with a `build` directory wit ha functional plugin that includes a block.

You may also use `yarn run start` to have a watcher look for code changes.
