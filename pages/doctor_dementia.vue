<template>
  <v-row>
    <v-row>
      <v-col
        ><v-card rounded>
          <v-card-text>
            <v-spacer />

            <v-toolbar class="text-h5 white--text" color="#E78EA9">
              <fa
                :icon="['fas', 'person-walking-with-cane']"
                class="text-h4 mr-2"
              />
              ข้อมูลทั่วไป
              <v-spacer />
              <v-btn class="white--text" color="#91C483" to="/doctor">
                <fa :icon="['fas', 'circle-left']" size="2x" />
                <p class="text-h6 mb-1 ml-1">แพทย์</p>
              </v-btn>
            </v-toolbar>

            <v-tabs background-color="#E78EA9" center-active dark v-model="tab">
              <v-tab>Mini Cog</v-tab>
              <v-tab>TGDS-15</v-tab>
              <v-tab>TMSE</v-tab>
              <v-tab>MOCA</v-tab>

              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Mini_Cog />
                  </v-card-text>
                </v-card>
              </v-tab-item>
              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Tgds />
                  </v-card-text>
                </v-card>
              </v-tab-item>
              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Tmse />
                  </v-card-text>
                </v-card>
              </v-tab-item>

              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Moca />
                  </v-card-text>
                </v-card>
              </v-tab-item>
            </v-tabs>
          </v-card-text> </v-card
      ></v-col>
    </v-row>
  </v-row>
</template>
<script>
import Mini_Cog from '~/components/edit/dementia/Mini_Cog_read.vue'
import Tmse from '~/components/edit/dementia/Tmse_read.vue'
import Tgds from '~/components/edit/dementia/Tgds_read.vue'
import Moca from '~/components/edit/dementia/Moca_read.vue'
export default {
  name: 'doctor_dementia',
  created() {
    // console.log(this.$route.params)
    // alert(this.$nuxt._route.params.dementia)
    console.log(this.$nuxt._route.params)
  },
  components: {
    Mini_Cog,
    Tmse,
    Tgds,
    Moca,
  },
}
</script>
