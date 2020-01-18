
export default {
  mode: 'spa',
  /*
  ** Headers of the page
  */
  head: {
    title: process.env.npm_package_name || '',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: process.env.npm_package_description || '' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },
  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#252525' },
  /*
  ** Global CSS
  */
  css: [
    {src: '~/assets/css/style.css'}
  ],
  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
    { src: '~/plugins/vue-burger-menu.js', ssr: false },
    '~plugins/vue-cookie.js',
    '~plugins/filters.js',
    '~plugins/fontawesome.js'
  ],
  /*
  ** Nuxt.js dev-modules
  */
  buildModules: [
  ],
  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://bootstrap-vue.js.org
    'bootstrap-vue/nuxt',
    // Doc: https://axios.nuxtjs.org/usage
    '@nuxtjs/axios',
    '@nuxtjs/pwa',
    'nuxt-webfontloader',
    '@nuxtjs/robots',
    '@nuxtjs/google-analytics',
    '@nuxtjs/apollo',
    ['nuxt-i18n', {
      locales: [
        {
          name: 'English',
          code: 'en',
          iso: 'en-US',
          file: 'en-US.js'
        },
        {
          name: 'French',
          code: 'fr',
          iso: 'fr-FR',
          file: 'fr-FR.js'
        },
      ],
      lazy:  true,
      seo: false,
      langDir: 'lang/',
      defaultLocale: 'en',
    }],
    ['nuxt-social-meta', {
      url: 'Site url',
      title: 'Title site',
      description: 'Description site',
      img: 'Link to image in static folder',
      locale: 'ru_RU',
      twitter: '@UserName',
      themeColor: '#ThemeColor'
    }]
  ],

  apollo: {
    tokenName: 'tgLaravelAPI', // optional, default: apollo-token
    cookieAttributes: {
      /**
        * Define when the cookie will be removed. Value can be a Number
        * which will be interpreted as days from time of creation or a
        * Date instance. If omitted, the cookie becomes a session cookie.
        */
      expires: 7, // optional, default: 7 (days)

      /**
        * Define the path where the cookie is available. Defaults to '/'
        */
      path: '/', // optional
      /**
        * Define the domain where the cookie is available. Defaults to
        * the domain of the page where the cookie was created.
        */
      domain: 'example.com', // optional

      /**
        * A Boolean indicating if the cookie transmission requires a
        * secure protocol (https). Defaults to false.
        */
      secure: false,
    },
    includeNodeModules: true, // optional, default: false (this includes graphql-tag for node_modules folder)
    authenticationType: 'Basic', // optional, default: 'Bearer'
    // required
    clientConfigs: {
      default: {
        // required  
        httpEndpoint: 'http://localhost:8000',
        // optional
        // override HTTP endpoint in browser only
        browserHttpEndpoint: 'http://localhost:8000/graphql',
        // optional
        // See https://www.apollographql.com/docs/link/links/http.html#options
        httpLinkOptions: {
          credentials: 'same-origin'
        },
        // You can use `wss` for secure connection (recommended in production)
        // Use `null` to disable subscriptions
        // wsEndpoint: 'ws://localhost:4000', // optional
        // LocalStorage token
        tokenName: 'apollo-token', // optional
        // Enable Automatic Query persisting with Apollo Engine
        persisting: false, // Optional
        // Use websockets for everything (no HTTP)
        // You need to pass a `wsEndpoint` for this to work
        // websocketsOnly: false // Optional
      },
      test: {
        httpEndpoint: 'https://tremglobal.now.sh/',
        tokenName: 'apollo-token'
      },
    }
  },

  googleAnalytics: {
    id: "UA-12301-2"
  },

  webfontloader: {
    google: {
      families: ["Open+Sans:300,400,600&subset=latin-ext&display=swap"]
    },
  },
  /*
  ** Axios module configuration
  ** See https://axios.nuxtjs.org/options
  */
  axios: {
  },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** You can extend webpack config here
    */
    extend (config, ctx) {
    }
  }
}
