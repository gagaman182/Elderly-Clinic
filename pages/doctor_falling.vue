<template>
  <v-row>
    <v-row>
      <v-col
        ><v-card rounded>
          <v-card-text>
            <v-spacer />

            <v-toolbar class="text-h5 white--text" color="#92BA92">
              <fa
                :icon="['fas', 'person-walking-with-cane']"
                class="text-h4 mr-2"
              />
              ข้อมูลทั่วไป
              <v-spacer />
              <v-btn class="white--text" color="#325288" to="/doctor">
                <fa :icon="['fas', 'circle-left']" size="2x" />
                <p class="text-h6 mb-1 ml-1">แพทย์</p>
              </v-btn>
            </v-toolbar>

            <v-tabs background-color="#92BA92" center-active dark v-model="tab">
              <v-tab>ประวัติการหกล้ม </v-tab>
              <v-tab>Short_Fbs_I</v-tab>
              <v-tab>TUGT</v-tab>
              <v-tab>Oxford Knee Score</v-tab>
              <v-tab>SPPB</v-tab>

              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <fall />
                  </v-card-text>
                </v-card>
              </v-tab-item>
              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Short_Fbs_I />
                  </v-card-text>
                </v-card>
              </v-tab-item>
              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Tug />
                  </v-card-text>
                </v-card>
              </v-tab-item>

              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Knee_Score />
                  </v-card-text>
                </v-card>
              </v-tab-item>

              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Risk_fall />
                  </v-card-text>
                </v-card>
              </v-tab-item>

              <v-tab-item>
                <v-card>
                  <v-card-text>
                    <Sppb />
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
import Fall from '~/components/edit/falling/Fall_read.vue'
import Short_Fbs_I from '~/components/edit/falling/Short-Fbs-I_read.vue'
import Tug from '~/components/edit/falling/Tug_read.vue'
import Knee_Score from '~/components/edit/falling/Knee-Score_read.vue'
import Risk_fall from '~/components/edit/falling/Risk-fall_read.vue'
import Sppb from '~/components/edit/falling/Sppb_read.vue'
export default {
  name: 'doctor_falling',
  created() {
    // console.log(this.$route.params)
    // alert(this.$nuxt._route.params.falling)
    console.log(this.$nuxt._route.params)
  },
  components: {
    Fall,
    Short_Fbs_I,
    Risk_fall,
    Tug,
    Knee_Score,
    Sppb,
  },
}
</script>
