<template>
    <div class="header-social-links">
        <nuxt-link :to="$t('fb_link')" target="_blank">
            <font-awesome-icon :icon="['fab', 'facebook-f']" class="icon-fb"></font-awesome-icon>
        </nuxt-link>
        <nuxt-link :to="$t('ig_link')" target="_blank">
            <font-awesome-icon :icon="['fab', 'instagram']" class="icon-ig"></font-awesome-icon>
        </nuxt-link>
        <nuxt-link :to="$t('yt_link')" target="_blank">
            <font-awesome-icon :icon="['fab', 'youtube']" class="icon-yt"></font-awesome-icon>
        </nuxt-link>
        <nuxt-link :to="$t('lnkd_link')" target="_blank">
            <font-awesome-icon :icon="['fab', 'linkedin']" class="icon-in"></font-awesome-icon>
        </nuxt-link>
        <nuxt-link :to="$t('twt_link')" target="_blank">
            <font-awesome-icon :icon="['fab', 'twitter']" class="icon-tw"></font-awesome-icon>
        </nuxt-link>
        <nuxt-link :to="$t('reddit_link')" target="_blank">
            <font-awesome-icon :icon="['fab', 'reddit']" class="icon-reddit"></font-awesome-icon>
        </nuxt-link>
        <nuxt-link :to="$t('pinterest_link')" target="_blank">
            <font-awesome-icon :icon="['fab', 'pinterest']" class="icon-pinterest"></font-awesome-icon>
        </nuxt-link>
    </div>
</template>

<script>
export default {
    
}
</script>