<template>
  <div class="container-fluid p-0">
    <div>
      <!-- Mobile Menu -->
      <Slide>
        <div class="mobile-menu-logo">
            <Logo />
        </div>
        <nuxt-link :to="localePath('index')"> {{ $t('home') }} </nuxt-link>
      </Slide>
      <!-- Mobile Menu End -->
      
      <!-- Header -->
      <TheHeader />
      <!-- Header End -->

    </div>
  </div>
</template>

<script>
import {Slide} from 'vue-burger-menu'
import Logo from '~/components/Header/Logo.vue'
import TheHeader from '~/components/Header/TheHeader.vue'
import TheFooter from '~/components/Footer/TheFooter.vue'

import gql from 'graphql-tag'

export default {
  data() {
    return {
      project: ''
    }
  },

  apollo: {
    // Query with parameters
    project: {
      // gql query
      query: gql`query projectID($id: ID!) {
        project(id: $id) {
          project_name
        }
      }`,
      // Static parameters
      variables: {
        id: 1,
      },
    },
  },
  
  components: {
    TheHeader,
    TheFooter,
    Slide,
    Logo
  }
}
</script>

<style>
.container {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.title {
  font-family: 'Quicksand', 'Source Sans Pro', -apple-system, BlinkMacSystemFont,
    'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  display: block;
  font-weight: 300;
  font-size: 100px;
  color: #35495e;
  letter-spacing: 1px;
}

.subtitle {
  font-weight: 300;
  font-size: 42px;
  color: #526488;
  word-spacing: 5px;
  padding-bottom: 15px;
}

.links {
  padding-top: 15px;
}
</style>
