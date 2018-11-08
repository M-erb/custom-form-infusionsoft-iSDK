module.exports = new Vue({
  el: '#app',
  data: {
    testing: 'This is a test!'
  },
  methods: {

    
    // Helper methods
    getOneMatch (arr1, arr2) {
      let result = ''
      if (arr1.length && arr2.length) {
        for (let item = 0; item < arr1.length; item++) {
          for (let err = 0; err < arr2.length; err++) {
            if (arr1[item].field === arr2[err].field) {
              result = arr1[item]
              break
            }
          }
        }
      }

      return result
    },
    getOneMatchArryStr (arr1, arr2) {
      let result = ''
      for (let item = 0; item < arr1.length; item++) {
        for (let err = 0; err < arr2.length; err++) {
          if (arr1[item] === arr2[err]) {
            result = arr1[item]
            break
          }
        }
      }

      return result
    },
    round (value, exp) {
      if (typeof exp === 'undefined' || +exp === 0) { return Math.round(value) }
      value = +value
      exp = +exp
      if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) { return NaN }
      // Shift
      value = value.toString().split('e')
      value = Math.round(+(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp)))
      // Shift back
      value = value.toString().split('e')
      return +(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp))
    },
    getParamByName (name, url) {
      if (!url) url = location.href
      name = name.replace(/[[]/, '\\[').replace(/[\]]/, '\\]')
      var regexS = '[\\?&]' + name + '=([^&#]*)'
      var regex = new RegExp(regexS)
      var results = regex.exec(url)
      return results == null ? null : decodeURIComponent(results[1])
    }
  }
})
