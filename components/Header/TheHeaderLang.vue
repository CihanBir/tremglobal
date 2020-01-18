<template>
    <div class="lang-wrap">
        <b-dropdown id="lang">
          <template v-slot:button-content>
              {{ currLang | capitalize }}
            </template>
            <b-dropdown-item v-for="(value, key) in locales" :key="key" href="#" @click.prevent="setLocale(key, value)">
              {{ value }}
            </b-dropdown-item>
      </b-dropdown>
    </div>
</template>
<script>
import { mapGetters } from 'vuex'
import VueCookie from 'vue-cookie'

export default {
    name: 'TheHeaderLang',

    data() {
        return {
            currLang: this.$cookie.get('locale') ? this.$cookie.get('locale') : 'en'
        }
    },

    computed: mapGetters({
        locale: 'lang/locale',
        locales: 'lang/locales'
    }),

    methods: {
        setLocale (locale, value) {
            if (this.locale !== locale) {
                this.$store.dispatch('lang/setLocale', { locale })
                this.currLang = value;
            }
        }
  }
}
</script>