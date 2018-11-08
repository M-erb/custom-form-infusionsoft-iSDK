# Custom form for Infusionsoft

This uses the php iSDK from Infusionsoft to communicate with Infusionsoft and save a new contact with dup checking.

CSS uses SCSS with wepback to pre-compile so you will need [node.js](https://nodejs.org/en/) to build and/ or edit the css. v8.11 was used to create this. CSS framework in use is [bulma](https://bulma.io/)

## Install

Clone this repo then run in this directory:

```
npm install
```

To build and use:
```
npm run build
```

To watch for changes for development:
```
npm run watch
```

Then to submit the form add to "./view-model/submit.php" the APPNAME and APIKEY in place of the said names.
