<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-toolbar class="text-h5 white--text" color="#B689C0">
            <fa :icon="['fas', 'user-doctor']" class="text-h4 mr-2" />
            แพทย์
          </v-toolbar>
        </v-card-text>
        <v-card-text>
          <v-row>
            <v-col cols="12" md="4">
              <v-hover v-slot="{ hover }" open-delay="100" class="hands">
                <nuxt-link
                  class="boxhead"
                  :to="{ name: 'doctor_index', params: { index: index } }"
                >
                  <v-card
                    :elevation="hover ? 16 : 2"
                    :class="{ 'on-hover': hover }"
                    class="mx-auto"
                    height="350"
                    max-width="100%"
                    color="#947EC3"
                  >
                    <v-card-text
                      class="
                        font-weight-medium
                        mt-12
                        text-center text-subtitle-1
                      "
                    >
                      <fa
                        :icon="['fas', 'person-walking-with-cane']"
                        class="text-h2 mr-2 fontcolor"
                        size="100"
                      />
                      <div class="text-h2 fontcolor">ข้อมูลทั่วไป</div>
                    </v-card-text>
                  </v-card>
                </nuxt-link>
              </v-hover>
            </v-col>
            <v-col cols="12" md="4">
              <v-hover v-slot="{ hover }" open-delay="100" class="hands">
                <nuxt-link
                  class="boxhead"
                  :to="{
                    name: 'doctor_dementia',
                    params: { dementia: dementia },
                  }"
                >
                  <v-card
                    :elevation="hover ? 16 : 2"
                    :class="{ 'on-hover': hover }"
                    class="mx-auto"
                    height="350"
                    max-width="100%"
                    color="#E78EA9"
                  >
                    <v-card-text
                      class="
                        font-weight-medium
                        mt-12
                        text-center text-subtitle-1
                      "
                    >
                      <fa
                        :icon="['fas', 'brain']"
                        class="text-h2 mr-2 fontcolor"
                        size="100"
                      />
                      <div class="text-h2 fontcolor">Dementia</div>
                    </v-card-text>
                  </v-card>
                </nuxt-link>
              </v-hover>
            </v-col>
            <v-col cols="12" md="4">
              <v-hover v-slot="{ hover }" open-delay="100" class="hands">
                <nuxt-link
                  class="boxhead"
                  :to="{ name: 'doctor_falling', params: { falling: falling } }"
                >
                  <v-card
                    :elevation="hover ? 16 : 2"
                    :class="{ 'on-hover': hover }"
                    class="mx-auto"
                    height="350"
                    max-width="100%"
                    color="#92BA92"
                  >
                    <v-card-text
                      class="
                        font-weight-medium
                        mt-12
                        text-center text-subtitle-1
                      "
                    >
                      <fa
                        :icon="['fas', 'person-falling']"
                        class="text-h2 mr-2 fontcolor"
                        size="100"
                      />
                      <div class="text-h2 fontcolor">Falling</div>
                    </v-card-text>
                  </v-card>
                </nuxt-link>
              </v-hover>
            </v-col>
          </v-row>
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: 'doctor',
  data() {
    return {
      index: `index`,
      dementia: 'dementia',
      falling: 'falling',
    }
  },
}
</script>
<style>
.hands {
  cursor: pointer;
}
.boxhead {
  text-decoration: none;
}
.fontcolor {
  color: #534340;
}
</style>
