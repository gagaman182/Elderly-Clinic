<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-toolbar class="text-h5 white--text" color="#B689C0">
            <fa
              :icon="['fas', 'person-walking-with-cane']"
              class="text-h4 mr-2"
            />
            บันทึกข้อมูลทั่วไป {{ person_data }}
          </v-toolbar>
          <v-stepper v-model="e1">
            <v-stepper-header>
              <v-stepper-step :complete="e1 > 1" step="1" color="#B689C0">
                ลงทะเบียน
              </v-stepper-step>

              <v-divider></v-divider>

              <v-stepper-step :complete="e1 > 2" step="2" color="#B689C0">
                ADL
              </v-stepper-step>

              <v-divider></v-divider>

              <v-stepper-step step="3" color="#B689C0">
                FRAX-SCORE
              </v-stepper-step>
            </v-stepper-header>

            <v-stepper-items>
              <v-stepper-content step="1">
                <v-card>
                  <v-card-text>
                    <Regis @sendcid="ciduse" />
                  </v-card-text>
                  <v-card-text>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                      <fa :icon="['fas', 'circle-right']" size="2x" />
                    </v-btn>
                    <v-btn class="white--text" color="#066163">
                      <p class="text-h6 mb-1 ml-1">หัวข้อ {{ e1 }}</p>
                    </v-btn>
                  </v-card-text>
                </v-card>
              </v-stepper-content>

              <v-stepper-content step="2">
                <v-card>
                  <v-card-text>
                    <Adl />
                  </v-card-text>
                  <v-card-text>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                      <fa :icon="['fas', 'circle-left']" size="2x" />
                    </v-btn>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                      <fa :icon="['fas', 'circle-right']" size="2x" />
                    </v-btn>
                    <v-btn class="white--text" color="#066163">
                      <p class="text-h6 mb-1 ml-1">หัวข้อ {{ e1 }}</p>
                    </v-btn>
                  </v-card-text>
                </v-card>
              </v-stepper-content>

              <v-stepper-content step="3">
                <v-card>
                  <v-card-text>
                    <Frax_Score />
                  </v-card-text>
                  <v-card-text>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                      <fa :icon="['fas', 'circle-left']" size="2x" />
                    </v-btn>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                      <fa :icon="['fas', 'circle-right']" size="2x" />
                    </v-btn>
                    <v-btn class="white--text" color="#066163">
                      <p class="text-h6 mb-1 ml-1">หัวข้อ {{ e1 }}</p>
                    </v-btn>
                  </v-card-text>
                </v-card>
              </v-stepper-content>
            </v-stepper-items>
          </v-stepper>
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
import Regis from '~/components/Regis.vue'
import Adl from '~/components/Adl.vue'
import Frax_Score from '~/components/Frax-Score.vue'

export default {
  name: 'IndexPage',
  data() {
    return {
      e1: 1,
      person_data: '',
    }
  },
  components: {
    Regis,
    Adl,
    Frax_Score,
  },
  mounted() {},
  methods: {
    ciduse(data) {
      alert(data)
      this.person_data = data
    },
  },
}
</script>

