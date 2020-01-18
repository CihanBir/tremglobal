<template>
    <div class="header-navbar">
        <div class="navbar-top">
            <TheHeaderCurrency />
            <TheHeaderLang />
        </div>
        <div class="navbar-menu">
            <nav class="nav-menu">
                <ul class="menu">
                    <li>
                        <nuxt-link :to="localePath('index')"> {{ $t('home') }} </nuxt-link>
                    </li>
                    <li>
                        <nuxt-link :to="localePath('about')"> {{ $t('about_us') }} </nuxt-link>
                    </li>
                    <li>
                        <b-dropdown id="dropdown-text">
                            <template v-slot:button-content>
                                {{ $t('projects') }}
                            </template>
                            <b-dropdown-item :to="localePath('properties')">
                                All {{ $t('projects') }}
                            </b-dropdown-item>
                            <b-dropdown-item :to="localePath('properties/istanbul')">
                                Istanbul {{ $t('projects') }}
                            </b-dropdown-item>
                            <b-dropdown-item :to="localePath('properties/izmir')">
                                Izmir {{ $t('projects') }}
                            </b-dropdown-item>
                            <b-dropdown-item :to="localePath('properties/antalya')">
                                Antalya {{ $t('projects') }}
                            </b-dropdown-item>
                            <b-dropdown-item :to="localePath('properties/ankara')">
                                Ankara {{ $t('projects') }}
                            </b-dropdown-item>
                            <b-dropdown-item :to="localePath('properties/bursa')">
                                Bursa {{ $t('projects') }}
                            </b-dropdown-item>
                            <b-dropdown-item :to="localePath('properties/sakarya')">
                                Sakarya {{ $t('projects') }}
                            </b-dropdown-item>
                            <b-dropdown-item :to="localePath('properties/bodrum')">
                                Bodrum {{ $t('projects') }}
                            </b-dropdown-item>
                            <b-dropdown-item :to="localePath('properties/trabzon')">
                                Trabzon {{ $t('projects') }}
                            </b-dropdown-item>
                            <b-dropdown-item-button>
                                <nuxt-link :to="localePath('properties/yalova')"> Yalova {{ $t('projects') }} </nuxt-link>
                            </b-dropdown-item-button>
                            <b-dropdown-item-button>
                                <nuxt-link :to="localePath('properties/usa')"> Usa {{ $t('projects') }} </nuxt-link>
                            </b-dropdown-item-button>
                            <b-dropdown-item-button>
                                <nuxt-link :to="localePath('properties/london')"> London {{ $t('projects') }} </nuxt-link>
                            </b-dropdown-item-button>
                        </b-dropdown>
                    </li>
                    <li>
                        <nuxt-link :to="localePath('services')"> {{ $t('services') }} </nuxt-link>
                    </li>
                    <li>
                        <nuxt-link :to="localePath('articles')"> {{ $t('articles') }} </nuxt-link>
                    </li>
                    <li>
                        <nuxt-link :to="localePath('contact')"> {{ $t('contact') }} </nuxt-link>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
import TheHeaderCurrency from '~/components/Header/TheHeaderCurrency.vue'
import TheHeaderLang from '~/components/Header/TheHeaderLang.vue'

export default {
    name: 'TheHeaderNavBar',

    components: {
        TheHeaderCurrency,
        TheHeaderLang
    }
}
</script>