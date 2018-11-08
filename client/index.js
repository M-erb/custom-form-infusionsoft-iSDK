// SCSS
import './scss/styles.scss'

// -------------------
// Vue set up and extra stuff
// -------------------
switch (process.env.NODE_ENV) {
  case 'production':
    window.Vue = require('vue/dist/vue.min.js')
    break;
  case 'development':
    window.Vue = require('vue/dist/vue')
    break;
  default:
    window.Vue = require('vue/dist/vue.min.js')
    break;
}

// plug-ins


// -=Vue Components=-

// vue.js root of app
require('./app')

