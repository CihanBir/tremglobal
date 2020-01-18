<template>
    <header class="header">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-6 col-lg-2">
                    <Logo />
                </div>
                <div class="col-sm-6 col-md-6 col-lg-9">
                    <TheHeaderNavBar />
                </div>
            </div>
        </div>
    </header>
</template>

<script>

import Logo from '~/components/Header/Logo.vue'
import TheHeaderNavBar from '~/components/Header/TheHeaderNavBar.vue'
import TheHeaderCurrency from '~/components/Header/TheHeaderCurrency.vue'
import TheHeaderLang from '~/components/Header/TheHeaderLang.vue'


export default {
    name: 'Header',
    components: { 
        Logo,
        TheHeaderNavBar,
        TheHeaderCurrency,
        TheHeaderLang
    }
}
</script>