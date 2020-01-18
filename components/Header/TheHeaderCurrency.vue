<template>
    <div class="currency-wrap">
        <b-dropdown id="currency">
          <template v-slot:button-content>
              {{ currCurrency }}
            </template>
            <b-dropdown-item v-for="(value, key) in currencies" :key="key" href="#" @click.prevent="setCurrency(key, value)">
              {{ value }}
            </b-dropdown-item>
      </b-dropdown>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'
import VueCookie from 'vue-cookie'

export default {
    name: 'TheHeaderCurrency',

    data() {
        return {
            currCurrency: this.$cookie.get('currency') ? this.$cookie.get('currency') : '$'
        }
    },

    computed: mapGetters({
        currency: 'currency/currency',
        currencies: 'currency/currencies'
    }),

    methods: {
        setCurrency (currency, value) {
            if (this.currency !== currency) {
                this.$store.dispatch('currency/setCurrency', { currency })
                this.currCurrency = value;
            }
        }
  }
}
</script>