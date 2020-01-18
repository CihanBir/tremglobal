import VueCookie from 'vue-cookie'

// state
export const state = () => ({
  currency: '$',
  currencies: {
    '$': '$',
    '€': '€',
    '₺': '₺',
    '£': '£',
    '₽': '₽',
    '¥': '¥'
  }
})

// getters
export const getters = {
  currency: state => state.currency,
  currencies: state => state.currencies
}

// mutations
export const mutations = {
  SET_CURRENCY (state, { currency }) {
    state.currency = currency
  }
}

// actions
export const actions = {
  setCurrency ({ commit }, { currency }) {
    commit('SET_CURRENCY', { currency })

    VueCookie.set('currency', currency, { expires: 365 })
  }
}