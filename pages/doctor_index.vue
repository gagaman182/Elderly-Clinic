<template>
  <v-row>
    <v-row>
      <v-col
        ><v-card rounded>
          <v-card-text>
            <v-spacer />

            <v-toolbar class="text-h5 white--text" color="#947EC3">
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

            <v-tabs background-color="#947EC3" center-active dark v-model="tab">
              <v-tab>ทะเบียน</v-tab>
              <v-tab>ADL</v-tab>
              <v-tab>FRAX-SCORE</v-tab>

              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Regis />
                  </v-card-text>
                </v-card>
              </v-tab-item>
              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Adl />
                  </v-card-text>
                </v-card>
              </v-tab-item>

              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Frax_Score />
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
import Regis from '~/components/edit/index/Regis_read.vue'
import Adl from '~/components/edit/index/Adl_read.vue'
import Frax_Score from '~/components/edit/index/Frax-Score_read.vue'
export default {
  name: 'doctor_index',

  created() {
    // console.log(this.$route.params)
    // alert(this.$nuxt._route.params.index)
    console.log(this.$nuxt._route.params)
  },
  components: {
    Regis,
    Adl,
    Frax_Score,
  },
}
</script>
