<template>
  <v-app dark>
    <v-navigation-drawer
      v-model="drawer"
      :mini-variant="miniVariant"
      :clipped="clipped"
      fixed
      app
    >
      <v-list>
        <v-list-item
          v-for="(item, i) in items"
          :key="i"
          :to="item.to"
          router
          exact
          color="#947EC3"
        >
          <v-list-item-action>
            <fa :icon="item.icon" size="2x" color="#947EC3" />
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title v-text="item.title" class="text-h6" />
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
    <v-app-bar :clipped-left="clipped" fixed app color="#6A67CE">
      <!-- <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
      <v-btn icon @click.stop="miniVariant = !miniVariant">
        <v-icon>mdi-{{ `chevron-${miniVariant ? 'right' : 'left'}` }}</v-icon>
      </v-btn>
      <v-btn icon @click.stop="clipped = !clipped">
        <v-icon>mdi-application</v-icon>
      </v-btn>
      <v-btn icon @click.stop="fixed = !fixed">
        <v-icon>mdi-minus</v-icon>
      </v-btn> -->
      <img src="@/assets/65.gif" />
      <v-toolbar-title v-text="title" class="text-h4 white--text" />
      <!-- <v-spacer />
      <v-btn icon @click.stop="rightDrawer = !rightDrawer">
        <v-icon>mdi-menu</v-icon>
      </v-btn> -->
    </v-app-bar>
    <v-main>
      <Nuxt />
      <!-- <v-container>
        <Nuxt />
      </v-container> -->
    </v-main>
    <v-navigation-drawer v-model="rightDrawer" :right="right" temporary fixed>
      <v-list>
        <v-list-item @click.native="right = !right">
          <v-list-item-action>
            <v-icon light> mdi-repeat </v-icon>
          </v-list-item-action>
          <v-list-item-title>Switch drawer (click me)</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
    <v-footer :absolute="!fixed" app>
      <span>&copy; {{ new Date().getFullYear() }}</span>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  name: 'DefaultLayout',
  data() {
    return {
      clipped: true,
      drawer: true,
      fixed: false,
      items: [
        {
          icon: ['fas', 'person-cane'],
          title: 'หน้าแรก',
          to: '/',
        },
        {
          // icon: 'mdi-chart-bubble',

          icon: ['fas', 'fa-square-poll-horizontal'],
          title: 'ประเมินผล',
          to: '/inspire',
        },
      ],
      miniVariant: false,
      right: true,
      rightDrawer: false,
      title: 'คลินิกผู้สูงอายุ  รพ.หาดใหญ่',
    }
  },
}
</script>
<style scoped>
/* google font */
#app {
  font-family: 'Trirong', serif;
}
img {
  width: 3%;
  height: auto;
  display: block;
  margin-right: 15px;
}
.logohead {
  margin-top: 15px;
  margin-bottom: 15px;
}
</style>